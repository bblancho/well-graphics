<?php

namespace App\Http\Controllers;

use App\Cart;
use DateTime;
use App\Service;
use App\Commande;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function  __construct(){
        $this->middleware(['auth', 'cart'])->only('checkout','paiement','facturation','dataFacturation'); // nom des méthodes
    }

    public function index(){
        $cart  = session('cart', [] ); // si ma variable de session "cart" n'existe pas, on lui affecte un tableau vide comme valeur par défaut

        $total = Cart::total() ;

        return view('cart.index', compact('cart','total') ) ;
    }

    public function add($id){
        $service = Service::findOrFail($id);

        if($service){
            Cart::add($service) ;

            return redirect()->route('cart.index') ;
        }
    }

    public function drop($id){
        $service = Service::findOrFail($id);

        if($service){
            Cart::drop($service) ;

            return redirect()->route('cart.index') ;
        }
    }

    public function clearPanier(){
        Cart::clearPanier();

        return redirect()->route('cart.index') ;
    }

    public function facturation(){
        $cart  = session('cart', [] ); // si ma variable de session "cart" n'existe pas, on lui affecte un tableau vide comme valeur par défaut
        $user = Auth::user();
        $total = Cart::total() ;
    
        return view('cart.infoFacturation', compact('cart','total') ) ;
    }

    public function dataFacturation(Request $request){
        $cart = session('cart', [] ); // si ma variable de session "cart" n'existe pas, on lui affecte un tableau vide comme valeur par défaut
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'lastName'          => 'required|min:2|string',
            'email'             => 'required|min:3|string',
            'firstName'         => 'required|min:2|string',
            'description'       => 'required|min:2|string',
        ]);

        if ( $validator->fails() ) {
            return back()->withErrors($validator)->withInput() ;
        }

        foreach( $cart as &$item_cart){
            $item_cart['description_projet'] = $request->input('description') ;
            $item_cart['user_id']   = $user->id ;
            $item_cart['user_name'] = $user->name ;
            $item_cart['email']     = $user->email ;
            session()->put('cart', $cart) ; // Maj
        }

        return redirect()->route('cart.checkout') ;
    }


    public function showCommande(Commande $commande){
        $this->authorize('view', $commande) ;

        return view('cart.commande', $commande ) ;
    }

    public function checkout(){
        $total = Cart::total() ;

        Stripe::setApiKey('sk_test_VutkMq3mq8b9fx33VirwdkhD00Mqo0CX5A');

        $intent = PaymentIntent::create([
            'amount' => $total,
            'currency' => 'eur',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]); // objet $intent->status

        $clientSecret = $intent->client_secret ; // Arr::get($intent,'client_secret') ;

        return view('cart.checkout', compact('total', 'clientSecret') ) ;
    }

    public function paiement(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $token = $request->input('stripeToken') ;

        $charge = Charge::create([
            'amount'   => Cart::total(),
            'currency' => 'eur',
            'source'   => $token
        ]);

        $date_achat = new DateTime() ;
        $date_achat->format('Y-m-d H:i:s') ;

        $uniqid  = Str::random(9);
        $user_id =Auth::id().'-'.Auth::user()->name; 

        $commande = new Commande ;
        $commande->user_id = Auth::id() ;
        $commande->date_achat = $date_achat;
        $commande->reference = $uniqid.$user_id;
        $commande->total = Cart::total() ;
        $commande->produits = json_encode( session('cart') );
        $commande->charge_id = $charge->id ;

        $commande->save() ;

        Cart::clearPanier();

        return redirect()->route('cart.index')->with('status','Commande validée !') ;
    }


}// Fin du controller
