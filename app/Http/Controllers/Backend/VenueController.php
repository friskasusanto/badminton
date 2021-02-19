<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Venue;

class VenueController extends Controller
{
	public function index ($id)
    {
    	$edit = Venue::find(1);
        return view('admin.venue.edit', compact('edit'));
    }
    public function edit (Request $request, $id)
    {
    	$edit = Venue::find(1);
    	$edit->text = $request->text;
    	$edit->save();

    	$status = 200;
        $message = "Schedule & Venue updated";
        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
