<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
   	public function index ($id)
    {
    	$edit = Contact::find(1);
        return view('admin.contact.edit', compact('edit'));
    }
    public function edit (Request $request, $id)
    {
    	$edit = Contact::find(1);
    	$edit->text = $request->text;
    	$edit->save();

    	$status = 200;
        $message = "Contact updated";
        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);

    }
}
