<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactPost(Request $request)
    {
        $data = $request->all();

       // return $data;


        Mail::send('emails.contact', $data, function ($message) {
            $message->from('info@cyprustransfer.org', 'Cyprus Transfer');
            $message->to('carnack54@gmail.com')->subject('Cyprus Transfer - İletişim Maili');
        });


        Mail::send('emails.contact', $data, function ($message) {
            $message->from('info@cyprustransfer.org', 'Cyprus Transfer');
            $message->to('info@cyprustransfer.org')->subject('Cyprus Transfer - İletişim Maili');
        });


        return Redirect::back()->with("type","success")->with("message",trans("site.contactSent"));
    }

    public function about()
    {
        return view('about');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function lang($lang)
    {
        $langs = ['tr', 'en'];
        if (in_array($lang, $langs)) {
            session()->put('lang', $lang);
            session()->save();
            return Redirect::back();
        }
        return Redirect::back();
    }


    public function mailapi(Request $request)
    {
        $data = $request->all();

        $request->oneway = ($request->oneway == "true"? 1:0);
        $request->twoway = ($request->twoway == "true"? 1:0);


        Mail::send('emails.welcome', $data, function ($message) {
            $message->from('info@cyprustransfer.org', 'Cyprus Transfer');
            $message->to('carnack54@gmail.com')->subject('Cyprus Transfer - Rezervasyon Talebi');
        });


        Mail::send('emails.welcome', $data, function ($message) {
            $message->from('info@cyprustransfer.org', 'Cyprus Transfer');
            $message->to('info@cyprustransfer.org')->subject('Cyprus Transfer - Rezervasyon Talebi');
        });


        Mail::send('emails.welcome', $data, function ($message) use ($request) {
            $message->from('info@cyprustransfer.org', 'Cyprus Transfer');
            $message->to($request->email)->subject('Cyprus Transfer - Rezervasyon Talebi');
        });


        Reservation::create($request->all());

    }



}
