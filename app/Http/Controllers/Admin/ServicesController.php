<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\User;
use App\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin']) ;
    }

    public function index()
    {
        $services = Service::latest('id')->get();

        $id=Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->first();

    	return view('admin.services.index', compact('users','services'));
    }

    public function show($id)
    {
        $ids   = Auth::id();
        $users = DB::table('users')->where('id', $ids)->first();
        $service = DB::table('services')->where('id', $id)->first();

    	return view('admin.services.show', compact('users','service'));
    }

    public function create()
    {
        // show view to create resource
        $id=Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->first();
        $tags= DB::table('tags')->get();
    	return view('admin.services.create', compact('users','tags') );
    }

    public function store(Request $request)
    {
        //dd( request()->all() );
        $validator = Validator::make($request->all(), [
            'title'             => 'required|min:3|string',
            'tag'               => 'required|numeric',
            'prixht'            => 'required|numeric',
            'prixttc'           => 'required|numeric',
            'body'              => 'required|min:3|string',
            'subtitle'          => 'required|min:3|string',
            'statut'            => 'boolean'
        ]);

        if ( $validator->fails() ) {
            return back()->withErrors($validator)->withInput() ;
        }

        $tagObjet = Tag::find( $request->input('tag') );
        //dd( 'id = '. $tagObjet->id.' nom = '.$tagObjet->name );

        $service = new Service() ;
        $service->user_id   = Auth::id() ;
        $service->title     = $request->input('title');
        $service->prixht    = $request->input('prixht');
        $service->prixttc   = $request->input('prixttc');
        $service->body      = $request->input('body');
        $service->tag       = $tagObjet->name;
        $service->tag_id    = $tagObjet->id;

        if( $request->input('statut') == 0 ){
            $service->statut = false ;
        }else{
            $service->statut = true ;
        }

        $service->url_fontawesome   = $request->input('url_fontawesome');
        $service->service_slug      = Str::slug($request->input('title'), '-');
        $service->subtitle          = $request->input('subtitle');

        $service->save();

        $notification = array(
            'message' => 'Service enregistrer avec succès', 
            'alert-type' => 'success'
        );
    	//redirection
        return redirect( route('admin.services.index') )->with($notification);
    }

    public function edit($id)
    {
        $ids     = Auth::id();
        $users   = DB::table('users')->where('id', $ids)->first();
        $service = DB::table('services')->where('id', $id)->first();
        $tags    = DB::table('tags')->get();
    	return view('admin.services.edit', compact('service', 'tags', 'users'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'             => 'required|min:3|string',
            'tag'               => 'required|numeric',
            'prixht'            => 'required|numeric',
            'prixttc'           => 'required|numeric',
            'body'              => 'required|min:3|string',
            'subtitle'          => 'required|min:3|string',
            'statut'            => 'boolean'
        ]);
        

        if ( $validator->fails() ) {
            return back()->withErrors($validator)->withInput() ;
        }

        $tagObjet = Tag::find( $request->input('tag') );
        $service  = Service::find($id) ;

        if( $request->input('statut') == 0 || $request->input('statut') == false ){
            $service->statut = false ;
        }else{
            $service->statut = true ;
        }
        $service->title     = $request->input('title');
        $service->prixht    = $request->input('prixht');
        $service->prixttc   = $request->input('prixttc');
        $service->body      = $request->input('body');
        $service->subtitle          = $request->input('subtitle');
        $service->url_fontawesome   = $request->input('url_fontawesome');
        $service->service_slug      = Str::slug($request->input('title'), '-');
        $service->tag       = $tagObjet->name;
        $service->tag_id    = $tagObjet->id;

        $service->save();

        $notification = array(
            'message' => 'Mise à jour avec succès', 
            'alert-type' => 'success'
        );

    	return redirect('admin/services/'. $service->id)->with($notification);
    }


    public function validateService()
    {
    	return request()->validate([
    		'title' => 'required',
            'prixht' => 'required',
            'prixttc' => 'required',
    		'body' => 'required',
            'tag' => 'required' 
    	]);
    }

    public function destroy($id)
    {
        if (! Gate::allows('isAdmin')) {
            return abort(401);
        }

        DB::table('services')->where('id', $id)->delete();
        $notification = array(
            'message' => 'Utilisateur supprimé avec succés', 
            'alert-type' => 'success'
        );
        return redirect()->route('admin.services.index')->with($notification);
    }
}