<?php

namespace App\Http\Controllers;

use App\Models\OncelikGoruntule;
use App\Models\Isler;
use Illuminate\Http\Request;

class OncelikListeleController extends Controller
{
    public function index(Request $request)
    {
		 $email = $request->session()->get('email');
	
	
	$islerdort = OncelikGoruntule::select('is_id', 'user_mail', 'work_name', 'siralama')
    ->orderBy('siralama', 'desc') // 'siralama' sütununa göre büyükten küçüğe sıralama
    ->groupBy('is_id', 'user_mail', 'work_name', 'siralama') // Tüm sütunları GROUP BY'ı ekleyin
    ->where('user_mail', $email) // Tüm sütunları GROUP BY'ı ekleyin
    ->get();
    

	$isleriki = Isler::where('user_name', $email)
                  ->select('work_name', 'time')
                  ->get();

        return view('islerisiralama', compact('islerdort', 'isleriki'));
    }
}
