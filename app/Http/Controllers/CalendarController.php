<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public function index()
    {
        // AuthController'daki login fonksiyonundan alınan email bilgisini session'dan kontrol et
        $email = session('email');

        // Eğer session'da email bilgisi yoksa boş bir listeyi döndür
        if (!$email) {
            return view('takvim', ['isler' => []]);
        }

        // Veritabanından islerim tablosundaki verileri $email'e göre filtreleyerek çekme
    $isler = DB::table('islerim')
            ->where('user_name', $email) // 'user_name' sütununu kontrol edin
            ->orderBy('is_date', 'asc')
            ->get();


        // Verileri görüntülemek için view'e geçiş
        return view('takvim', ['isler' => $isler]);
    }
}
