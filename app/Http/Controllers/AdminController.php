<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Contact;
use App\Pricing;
use App\Region;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view("admin.index");
    }

    public function bekleyen()
    {
        return view("admin.bekleyen");
    }

    public function onaylanan()
    {
        return view("admin.onaylanan");
    }


    public function reservation($id)
    {
        $res = Reservation::find($id);
        return view("admin.reservation", compact("res"));
    }

    public function setConfirm($id)
    {
        $res = Reservation::find($id);
        $res->confirm = 1;
        $res->save();
        return Redirect::back()->with("type", "success")->with("message", "Rezervasyon Onaylandı Olarak İşaretlendi");
    }

    public function delete($id)
    {
        $res = Reservation::find($id);
        $res->delete();
        return Redirect::route("admin.bekleyen")->with("type", "success")->with("message", "Rezervasyon Silindi");
    }


    public function sendMail($id)
    {
        $res = Reservation::find($id);

        $data = $res->toArray();

        $res->oneway = ($res->oneway == "true" ? 1 : 0);
        $res->twoway = ($res->twoway == "true" ? 1 : 0);


        Mail::send('emails.welcome', $data, function ($message) use ($res) {
            $message->from('info@cyprustransfer.org', 'Cyprus Transfer');
            $message->to($res->email)->subject('Cyprus Transfer - Rezervasyon Bilgilendirme');
        });


        return Redirect::back()->with("type", "success")->with("message", "Bilgilendirm Maili Gönderildi");

    }

    public function regions()
    {
        return view("admin.regions");
    }

    public function createRegion(Request $request)
    {
        $name = $request->input("name");

        Region::create($request->all());

        return Redirect::back()->with("type", "success")->with("message", "Bölge Eklendi");
    }

    public function deleteRegion($id)
    {
        $region = Region::find($id);

        $region->delete();

        return Redirect::back()->with("type", "success")->with("message", "Bölge Silindi");


    }


    public function editRegion(Request $request, $id)
    {
        $region = Region::find($id);

        $region->name = $request->input("name");
        $region->isAirport = $request->input("isAirport");
        $region->save();

        return Redirect::back()->with("type", "success")->with("message", "Düzenlendi");

    }


    public function pricing()
    {
        return view("admin.pricing");
    }


    public function createPricing(Request $request)
    {
        Pricing::create($request->all());

        return Redirect::back()->with("type", "success")->with("message", "Fiyat Eklendi");
    }


    public function deletePricing($id)
    {
        $pricing = Pricing::find($id);

        $pricing->delete();

        return Redirect::back()->with("type", "success")->with("message", "Silindi");

    }


    public function editPricing(Request $request, $id)
    {
        $pricing = Pricing::find($id);

        $pricing->from = $request->input("from");
        $pricing->to = $request->input("to");
        $pricing->price1 = $request->input("price1");
        $pricing->price2 = $request->input("price2");
        $pricing->save();

        return Redirect::back()->with("type", "success")->with("message", "Düzenlendi");

    }


    public function aboutus()
    {
        return view("admin.aboutus");
    }

    public function aboutusUpdate(Request $request)
    {
        AboutUs::first()->update($request->all());
        return Redirect::back()->with("type", "success")->with("message", "Düzenlendi");
    }

    public function contact()
    {
        return view("admin.contact");
    }

    public function contactUpdate(Request $request)
    {
        Contact::first()->update($request->all());
        return Redirect::back()->with("type", "success")->with("message", "Düzenlendi");

    }

}
