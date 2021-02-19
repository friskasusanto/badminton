<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Partner;

class PartnerController extends Controller
{
    public function index ($id)
    {
    	$edit = Partner::find(1);
        return view('admin.partner.edit', compact('edit'));
    }
    public function edit (Request $request, $id)
    {
    	$edit = Partner::find(1);
    	$edit->text = $request->text;
    	$edit->save();

    	$status = 200;
        $message = "Partner updated";
        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
