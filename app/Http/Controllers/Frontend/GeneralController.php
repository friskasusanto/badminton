<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reserve;
use App\Venue;
use App\Tournament;
use App\Training;
use App\Partner;
use App\Membership;
use App\Contact;
use App\About;
use App\Galery;
use App\GaleryImg;

class GeneralController extends Controller
{
    public function galeryMode (Request $request, $id)
    {
        $galery = Galery::find($id);
        $img = GaleryImg::where('galery_id', $galery->id)->get();
        // dd($img);
        return view('layout.php.gallery-mode', compact('galery', 'img'));
    }

    public function reserve ()
    {
        return view('reserve.index');
    }
    public function reserve_add (Request $request)
    {
        $reserve = new Reserve;
        $reserve->firstname = $request->firstname;
        $reserve->lastname = $request->lastname;
        $reserve->date_reservation = $request->date_reservation;
        $reserve->email = $request->email;
        $reserve->residential = $request->residential;
        $reserve->save();

        $status = 200;
        return redirect()->back()->with(['flash_status' => $status]);
    }
    public function about ()
    {
        $about = About::first();
        $contact = Contact::first();
        $galery = Galery::with('galeryImg')->orderBy('created_at', 'desc')->get();
        // dd($galery);
    	return view('about', compact('about', 'contact', 'galery'));
    }
    public function contact ()
    {
        $contact = Contact::first();
    	return view('contact', compact('contact'));
    }
    public function home ()
    {
    	return view('index');
    }
    public function membership ()
    {
        $membership = Membership::first();
        $contact = Contact::first();
    	return view('membership', compact('membership', 'contact'));
    }
    public function partner ()
    {
        $partner = Partner::first();
        $contact = Contact::first();
    	return view('partner', compact('partner', 'contact'));
    }
    public function training ()
    {
        $training = Training::first();
        $contact = Contact::first();
    	return view('training', compact('training', 'contact'));
    }
    public function turnament ()
    {
        $tour = Tournament::first();
        $contact = Contact::first();
    	return view('turnament', compact('tour', 'contact'));
    }
    public function venue ()
    {
        $venue = Venue::first();
        // dd($venue);
    	return view('venue', compact('venue'));
    }
}
