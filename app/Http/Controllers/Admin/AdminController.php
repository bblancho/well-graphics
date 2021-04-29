<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id ;
        $users = DB::table('users')->where('id', $id)->first();

        $users_nbr = DB::table('users')->count();

        return view('admin.index', compact('users','users_nbr'));
    }


    public function chat()
    {
        if (Auth::check()) {
            $id = Auth::user()->id ;
            $users = DB::table('users')->where('id', $id)->first();

            return view('admin.messenger',compact('users'));

        } else {
            abort(403,"Permission insuffisant");
        }
    }

    public function carte()
    {
        if (Auth::check()) {
            $id = Auth::user()->id ;
            $users = DB::table('users')->where('id', $id)->first();
            $userall= DB::table('users')->latest()->get();

            return view('admin.carte',compact('users','userall'));

        } else {
            abort(403,"Permission insuffisant");
        }
    }

    public function mentions()
    {
        if (Auth::check()) {
            $id = Auth::user()->id ;
            $users = DB::table('users')->where('id', $id)->first();

            return view('admin.mentions',compact('users'));

        } else {
            abort(403,"Permission insuffisant");
        }
    }
}
