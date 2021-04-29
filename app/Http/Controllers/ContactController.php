<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\Rdv;
use App\Mail\Info;
use App\Mail\Devis;
use App\Mail\Newsletter;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DevisRequest;
use App\Mail\Contact as MailContact;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $tags = DB::table('tags')->latest()->get();
        return view('contact',compact('tags'));
    }

    public function newsletter()
    {
        $email = request('email');
        $dt=now();
        $exist=DB::table('newsletter')->where('emailcontact',$email)->count();
        if ($exist==1)
        {
            $notification = array(
                'message' => 'Vous êtes déjà abonné à notre newsletter. Merci beaucoup',
                'alert-type' => 'warning'
            );
            return redirect()->route('front.contact')->with($notification);
        }else
        {
            DB::table('newsletter')->insert([
                'emailcontact' => $email,
                'created_at' => $dt,
            ]);

            Mail::to('contact@well-graphics.com')
                ->send(new Newsletter(request('email')));

            Mail::html('Bonjour,<br>
                    Votre demande d\'inscription à la boite aux lettres de Well-Graphics.com a bien été prise en compte. Vous recevrez nos nouveautés et offres promotionnelles.<br>
                    Respectueusement,
                    <p>
                        Well-Graphics<br>
                        <img src="https://www.well-graphics.com/assets/img/logo_mail.png" alt="logo">
                    </p>', function ($message){
                $message->to(request('email'))
                        ->subject('Confirmation d\'inscription');
            });
            $notification = array(
                'message' => 'Votre demande d\'inscription à la boite aux lettres de Well-Graphics.com a bien été prise en compte. Vous recevrez nos nouveautés et offres promotionnels',
                'alert-type' => 'success'
            );
            return redirect()->route('front.contact')->with($notification);
        }

    }

    public function devis(DevisRequest $request)
    {
        $to = 'contact@well-graphics.com';
        $data = [
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
            'notes' => $request->input('notes'),
            'type'  => $request->input('type')
        ];

        $dt=now();
        DB::table('devis')->insert([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
            'notes' => $request->input('notes'),
            'type'  => $request->input('type'),
            'created_at' => $dt,
        ]);

        Mail::to($to)
            ->send( new Devis($data) );

        Mail::html('Bonjour,<br>
                Votre demande de devis pour le service '.request('type').' a bien été prise en compte. <br>
                Cordialement
                <p>
                    Well-Graphics<br>
                    <img src="https://www.well-graphics.com/assets/img/logo_mail.png" alt="logo">
                </p>', 
                function ($message){
                    $message->to(request('email'))
                            ->subject('Confirmation demande de devis - Well-Graphics');
                });

        $notification = array(
            'message' => 'Votre demande de devis a bien été prise en compte',
            'alert-type' => 'success'
        );
        return redirect()->route('front.contact')->with($notification);
    }

    public function contact(ContactRequest $request)
    {
        // Save data at BDD
        $dateNow = now();
        $contact = new Contact(); // Alias de contact

        $contact->email = $request->input('email');
        $contact->name  = $request->input('name');
        $contact->message = $request->input('message');
        $contact->created_at = $dateNow ;
        // Save data at BDD
        $contact->save();

        $data = [
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];

        $to = 'contact@well-graphics.com';

        Mail::to($to)
        ->send( new MailContact($data) );

        Mail::html(
            'Bonjour '.$request->input('name').'<br>
            Votre demande a bien été prise en compte. Le résponsable vous répondra dans le plus brèf délais <br>
            Cordialement
            <p>
                Well-Graphics<br>
                <img src="https://www.well-graphics.com/assets/img/logo_mail.png" alt="logo">
            </p>',
            function ($message){
                $message
                ->to( request('email') )
                ->subject('Confirmation prise de contact - Well-Graphics');
            }
        );

        $notification = array(
            'message' => 'Votre message a bien été livré et prise en compte. Nous vous répondrons dans les plus brefs délais.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function rdv()
    {
        request()->validate([
    		'name' => 'required',
            'email' => 'required|email',
            'membre' => 'required',
            'daterdv' => 'required',
            'notes' => 'required'
    	]);

        $to = 'contact@well-graphics.com';
        $data = [
            'name' => request('name'),
            'email' => request('email'),
            'membre' => request('membre'),
            'daterdv' => request('daterdv'),
            'notes' => request('notes'),
        ];

        $dt=now();
        DB::table('rdv')->insert([
            'name' => request('name'),
            'email' => request('email'),
            'membre' => request('membre'),
            'daterdv' => request('daterdv'),
            'notes' => request('notes'),
            'created_at' => $dt,
        ]);

        Mail::to($to)
            ->send(new Rdv($data));

        Mail::html('Bonjour,<br>Votre demande de prise de rendez-vous a bien été prise en compte. <br> Cordialement <br> Well-Graphics,', function ($message){
            $message->to(request('email'))
                    ->subject('Confirmation demande de rendez-vous');
        });
        $notification = array(
            'message' => 'Votre demande de prise de rendez-vous a bien été prise en compte',
            'alert-type' => 'success'
        );

        return redirect()->route('front.contact')->with($notification);
    }
}
