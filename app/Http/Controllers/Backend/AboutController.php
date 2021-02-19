<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index ($id)
    {
    	$edit = About::find(1);
        return view('admin.about.edit', compact('edit'));
    }
    public function edit (Request $request, $id)
    {
    	$edit = About::find(1);
    	$edit->text = $request->text;
    	$edit->save();

    	$status = 200;
        $message = "About updated";
        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
