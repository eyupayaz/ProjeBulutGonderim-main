<?php

namespace App\Http\Controllers;

use App\Models\OncelikEkle;
use Illuminate\Http\Request;

class OncelikEkleController extends Controller
{
 
 
    public function store(Request $request)
    {
        $request->validate([
            'user_mail' => 'required|email',
            'work_name' => 'required',
            'siralama' => 'required|integer',
        ]);

        $isleruc = new OncelikEkle();
        $isleruc->user_mail = $request->input('user_mail');
        $isleruc->work_name = $request->input('work_name');
        $isleruc->siralama = $request->input('siralama');
        $isleruc->save();

        return redirect()->back()->with('alert', 'İş zorluğu Başarıyla puanlandı.');
    }
 
 
}
