<?php

namespace App\Http\Controllers;

use App\Models\Isler;

use Illuminate\Http\Request;

class AtananIslerController extends Controller
{
public function index(Request $request)
{
    $email = $request->session()->get('email'); // Kullanıcı oturumundan email'i al

    // Kullanıcının email'ine ait işleri filtreleyerek çek
    $isler = Isler::where('user_name', $email)
                  ->select('backlog', 'todo', 'InProgress', 'Done')
                  ->get();

    return view('atananisler', compact('isler'));
}

}
