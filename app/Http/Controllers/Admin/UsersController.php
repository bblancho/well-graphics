<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    
    public function index()
    {
        if (! Gate::allows('isAdmin')) {
            return abort(401);
        }

        $id=Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->first();

        $usersall = DB::table('users')->latest('id')->get();

        return view('admin.users.index', compact('users','usersall'));
        //dd($usersall);
    }

    public function show(User $user)
    {
        $ids=Auth::user()->id;
        $users = DB::table('users')->where('id', $ids)->first();

        return view('admin.users.show', compact('user','users'));
    }

    public function create()
    {
        if (! Gate::allows('isAdmin')) {
            return abort(401);
        }
        $id=Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->first();

        return view('admin.users.create', compact('users'));
    }

    public function store()
    {
        if (! Gate::allows('isAdmin')) {
            return abort(401);
        }
        request()->validate([
    		'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|same:password_confirm',
            'password_confirm' => 'required|same:password|min:6'
    	]);

        $user = User::create(request()->all());
        $notification = array(
            'message' => 'Utilisateur créer avec succès', 
            'alert-type' => 'success'
        );
        return redirect()->route('admin.users.index')->with($notification);
    }

    public function edit(User $user)
    {
        // if (! Gate::allows('isAdmin')) {
        //     return abort(401);
        // }
        $id=Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->first();

        $roles = DB::table('roles')->latest('id')->get();
        $postes = DB::table('poste')->latest('id')->get();
        $avatars = DB::table('avatar')->get();

        return view('admin.users.edit', compact('user', 'roles','users','postes','avatars'));
    }

    public function update($id)
    {

        request()->validate([
    		'username' => 'required',
    		'name' => 'required|unique:users,email',
    		'email' => 'required',
    	]);

        $user = User::find($id);
        $user->username = Request('username');
        $user->name = Request('name');
        $user->email = Request('email');
        $user->avatar = Request('avatar');
        $user->user_type = Request('user_type');
        $user->phone = Request('phone');
        $user->sexe = Request('sexe');
        $user->poste = Request('poste');
        $user->facebook = Request('facebook');
        $user->instagram = Request('instagram');
        $user->twitter = Request('twitter');
        $user->linkedin = Request('linkedin');
        $user->save();
        $notification = array(
            'message' => 'Mise à jour avec succès', 
            'alert-type' => 'success'
        );

        return redirect('admin/users/'. $user->id)->with($notification);
    }

    
    public function destroy(User $user)
    {
        if (! Gate::allows('isAdmin')) {
            return abort(401);
        }

        $user->delete();
        $notification = array(
            'message' => 'Utilisateur supprimé avec succés', 
            'alert-type' => 'success'
        );
        return redirect()->route('admin.users.index')->with($notification);
    }

}
