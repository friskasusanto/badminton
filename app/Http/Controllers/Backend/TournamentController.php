<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tournament;

class TournamentController extends Controller
{
    public function index ($id)
    {
    	$edit = Tournament::find(1);
        return view('admin.tournament.edit', compact('edit'));
    }
    public function edit (Request $request, $id)
    {
    	$edit = Tournament::find(1);
    	$edit->text = $request->text;
    	$edit->save();

    	$status = 200;
        $message = "Tournament updated";
        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
