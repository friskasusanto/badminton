<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Membership;

class MembershipController extends Controller
{
    public function index ($id)
    {
    	$edit = Membership::find(1);
        return view('admin.membership.edit', compact('edit'));
    }
    public function edit (Request $request, $id)
    {
    	$edit = Membership::find(1);
    	$edit->text = $request->text;
    	$edit->save();

    	$status = 200;
        $message = "Membership updated";
        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
