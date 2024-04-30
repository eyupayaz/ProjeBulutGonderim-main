<?php

namespace App\Http\Controllers;
use App\Models\Isler;
use Illuminate\Http\Request;

class IsSiralaBacklogController extends Controller
{
	   public function index()
{
     $isleriki = Isler::select('backlog', 'todo', 'InProgress', 'Done')->get();
    return view('islerisiralama', compact('isleriki'));
}
}
