<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\General;

class GeneralController extends Controller
{
    public function dasboard()
    {
    	return view('admin.dasboard');
    }
}
