<?php

namespace App\Http\Controllers;

use App\Devi;
use App\User;
use App\Contact;
use App\Mailrelation;
use App\Mail\ContactAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailrelationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function index()
    {
        $id=Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->first();
        $contact_nbr = DB::table('contacts')->count();
        $devis_nbr = DB::table('devis')->count();
        $rdv_nbr = DB::table('rdv')->count();
        $allContact = DB::table('contacts')->latest('id')->get();
        return view('admin.mailr.index', compact('users','contact_nbr','devis_nbr','rdv_nbr','allContact'));
    }
    public function contactShow($id)
    {
        $ids=Auth::user()->id;
        $users = DB::table('users')->where('id', $ids)->first();
        $contact_nbr = DB::table('contacts')->count();
        $devis_nbr = DB::table('devis')->count();
        $rdv_nbr = DB::table('rdv')->count();
        $contact = DB::table('contacts')->where('id', $id)->first();

    	return view('admin.mailr.contact.show', compact('users','contact_nbr','devis_nbr','rdv_nbr','contact'));
    }

    public function contactAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message'               => 'required|min:2|string',
            'id_contact_mail'       => 'required|min:2|integer',
            'emailDestinataire'     => 'required|min:3|string',
        ]);

        if ( $validator->fails() ) {
            return back()->withErrors($validator)->withInput() ;
        }

        $data = [
            'message' => $request->input('message')
        ];

        $to = $request->input("emailDestinataire");

        Mail::to($to)
        ->send( new ContactAdmin($data) );

        $date_now = now() ;
        $contact = Contact::findOrFail( $request->input('id_contact_mail') );
        $contact->lu = true ;
        $contact->updated_at = $date_now;
        $contact->save() ;

        $notification = array(
            'message' => 'Votre message a bien été délivré.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function contactDelete($id)
    {
        if (! Gate::allows('isAdmin')) {
            return abort(401);
        }

        DB::table('contacts')->where('id', $id)->delete();
        $notification = array(
            'message' => 'Message supprimé avec succés',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.mail.index')->with($notification);
    }

    public function newsletter()
    {
        $id=Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->first();
        $allMail = DB::table('newsletter')->latest('id')->get();
        $contact_nbr = DB::table('contacts')->count();
        $devis_nbr = DB::table('devis')->count();
        $rdv_nbr = DB::table('rdv')->count();
        return view('admin.mailr.newsletter', compact('users','allMail','contact_nbr','devis_nbr','rdv_nbr'));
    }
    public function newsletterDelete($id)
    {
        if (! Gate::allows('isAdmin')) {
            return abort(401);
        }

        DB::table('newsletter')->where('id', $id)->delete();
        $notification = array(
            'message' => 'Message supprimé avec succés',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.mail.newsletter')->with($notification);
    }

    public function devis()
    {
        $id=Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->first();
        $allDevis = DB::table('devis')->latest('id')->get();
        $contact_nbr = DB::table('contacts')->count();
        $devis_nbr = DB::table('devis')->count();
        $rdv_nbr = DB::table('rdv')->count();

        return view('admin.mailr.devis', compact('users','allDevis','contact_nbr','devis_nbr','rdv_nbr'));
    }
    public function devisShow($id)
    {
        $ids=Auth::user()->id;

        $devis = Devi::find($id);
        $users = DB::table('users')->where('id', $ids)->first();
        $contact_nbr = DB::table('contacts')->count();
        $devis_nbr = DB::table('devis')->count();
        $rdv_nbr = DB::table('rdv')->count();
        $contact = DB::table('contacts')->where('id', $id)->first();

    	return view( 'admin.mailr.devis.show', compact('users','contact_nbr','devis_nbr','rdv_nbr','contact','devis') );
    }

    public function devisDelete($id)
    {
        if (! Gate::allows('isAdmin')) {
            return abort(401);
        }

        DB::table('devis')->where('id', $id)->delete();
        $notification = array(
            'message' => 'Message supprimé avec succés',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.mail.devis')->with($notification);
    }

    public function rdv()
    {
        $id=Auth::user()->id;
        $users = DB::table('users')->where('id', $id)->first();
        $allRdv = DB::table('rdv')->latest('id')->get();
        $contact_nbr = DB::table('contacts')->count();
        $devis_nbr = DB::table('devis')->count();
        $rdv_nbr = DB::table('rdv')->count();
        return view('admin.mailr.rdv', compact('users','allRdv','contact_nbr','devis_nbr','rdv_nbr'));
    }
    public function rdvShow($id)
    {
        $ids=Auth::user()->id;
        $users = DB::table('users')->where('id', $ids)->first();
        $contact_nbr = DB::table('contacts')->count();
        $devis_nbr = DB::table('devis')->count();
        $rdv_nbr = DB::table('rdv')->count();
        $rdv = DB::table('rdv')->where('id', $id)->first();
    	return view('admin.mailr.rdv.show', compact('users','contact_nbr','devis_nbr','rdv_nbr','rdv'));
    }
    public function rdvDelete($id)
    {
        if (! Gate::allows('isAdmin')) {
            return abort(401);
        }

        DB::table('rdv')->where('id', $id)->delete();
        $notification = array(
            'message' => 'Message supprimé avec succés',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.mail.rdv')->with($notification);
    }
}
