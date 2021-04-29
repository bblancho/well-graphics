<?php

namespace App\Http\Controllers\Admin;

use App\Commande;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;


class CommandeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth') ;
    }

    function index()
    {
        $users = Auth::user() ;

        if( $users->getRole() == "admin" ){
            $commandes = Commande::orderBy('id','desc')->get() ;

            return view('admin.commande', compact('commandes','users' ) ) ;
        }

        $commandes = Commande::where('user_id', $users->id)->orderBy('id','desc')->get() ;

        return view('cart.commande', compact('commandes','users') ) ; 
    }


    public function show(Commande $commande){
        $this->authorize('view', $commande) ;

        return view('cart.commande', $commande ) ;
    }


    public function showFacture(Commande $commande){
        $user = Auth::user();

        if( $user->can('view', $commande) ){
            $pdf = PDF::loadView('cart.facture', [
                'users'     => $user,
                'id'        => $commande->id,
                'date'      => $commande->created_at,
                'produit'   => json_decode($commande->produits),
                'total'     => $commande->total
            ]);

            return $pdf->download("facture-$commande->created_at.pdf");
        }

        abort(403) ;
    }


}
