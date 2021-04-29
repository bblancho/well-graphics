<?php

namespace App\Http\Controllers;


use App\User;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class FrontController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only( ['showCompte','editCompte','updateCompte','password','updatePassword'] ) ;
    }

    public function index()
    {
        $tags = DB::table('tags')->latest()->get();
        $serviceWeb = Service::where('tag','web')->get();
        $serviceGraphique = Service::where([ ['tag','graphique'],['statut', '=','1'] ])->take(6)->get();
        $serviceVideo = Service::where('tag','video')->get();

        return view('index',compact('tags','serviceWeb','serviceGraphique','serviceVideo'));
    }

    public function services()
    {
        $tags= DB::table('tags')->latest()->get();
        $serviceWeb = Service::where('tag','web')->get();
        $allG = Service::where('tag','graphique')->get();
        $allV = Service::where('tag','video')->get();

        return view('services',compact('tags','allG','allV','serviceWeb'));
    }

    public function showService($slug)
    {
        $service = Service::where('service_slug',$slug)->firstOrFail();

    	return view('service_show', compact('service'));
    }


    public function realisations()
    {
        $tags = DB::table('tags')->latest()->get();
        return view('realisations',compact('tags'));
    }

    public function confirm()
    {
        return view('confirm');
    }

    public function showCompte($id){
        $id    = Auth::user()->id;
        $user = DB::table('users')->where('id', $id)->first();

        return view( 'compte', compact('user') );
    }

    public function editCompte($id){

        $user = User::find($id);

        return view('edit-user', compact('user') );
    }

    public function updateCompte(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'username'  => 'required',
    		'name'      => 'required|unique:users,email',
            'email'     => 'required',
            'societe'   => 'required',
        ]);

        if ($validator->fails()) {
            return  back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $user = User::find($id);

        $user->username = $request->input('username');
        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->societe  = $request->input('societe');

        $user->save();

        $notification = array(
            'message' => 'Mise à jour avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route("front.compte.show", $user->id)->with($notification);
    }

    public function password(){
        $user = Auth::user();

        return view('password', compact('user') );
    }

    public function updatePassword(Request $request){

        $validator = Validator::make($request->all(), [
            'password'              => 'required|min:6|string|confirmed',
            'password_old'          =>['required',
                    function ($attribute, $value, $fail) {
                        if ( !Hash::check($value, Auth::user()->password) ) {
                            return $fail(" Ancien mot de passe érroné ! ");
                        }
                    }
                ],
            ])
        ;

        if ( $validator->fails() ) {
            return back()->withErrors($validator) ;
        }

        $user = Auth::user();
        $user->password = Hash::make($request->password) ;
        $user->save();

        $notification = array(
            'message' => 'Votre mot de passe a été mise à jour avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route("front.compte.show", $user->id)->with($notification);
    }

}
