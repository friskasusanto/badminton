<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function about ()
    {
    	return view('about');
    }
    public function contact ()
    {
    	return view('contact');
    }
    public function home ()
    {
    	return view('home');
    }
    public function membership ()
    {
    	return view('membership');
    }
    public function partner ()
    {
    	return view('partner');
    }
    public function training ()
    {
    	return view('training');
    }
    public function turnament ()
    {
    	return view('turnament');
    }
    public function venue ()
    {
    	return view('venue');
    }
}
