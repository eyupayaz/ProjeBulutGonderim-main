<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

use App\Models\InProgress;
use App\Models\Done;

class TodoController extends Controller
{
    public function index()
    {
        // Kullanıcının e-posta adresini al
        $email = session()->get('email');

        // Kullanıcının atandığı işleri getir
        $assignedWorks = Todo::where('user_name', $email)->get();
		
		$listele=InProgress::where('user_name',$email)->get();
		$listele2=Done::where('user_name',$email)->get();
		
        
        // atanmisler.blade.php görünümünü render et ve atanan işleri gönder
return view('atananisler', ['assignedWorks' => $assignedWorks, 'listele' => $listele, 'listele2' => $listele2]);

	}
	
	
	 public function startWork(Request $request)
    {
        $userName = session()->get('email');
        $workName = $request->input('work_name');

        // Kullanıcının daha önce bu işi başlatıp başlatmadığını kontrol et
        $existingWork = InProgress::where('user_name', $userName)
                                    ->where('work_name', $workName)
                                    ->exists();

        if ($existingWork) {
            // İş zaten başlatılmış, kullanıcıya uyarı göster
            return back()->with('error', 'Bu iş zaten başlatıldı.');
        }

        // Başlatılmamışsa, işlemi devam ettir
        $time = $request->input('time');

        // In Progress tablosuna veri ekleme
        InProgress::create([
            'user_name' => $userName,
            'work_name' => $workName,
            'time' => $time,
        ]);

        // Todo tablosundaki ilgili işin status değerini güncelle
        Todo::where('user_name', $userName)
            ->where('work_name', $workName)
            ->update(['status' => 1]);

        // Başarılı ekleme mesajı veya işlem sonrası başka bir işlem yapabilirsiniz
        return redirect()->back()->with('success', 'İş başarıyla başlatıldı.');
    }
	
		public function finishWork(Request $request)
    {
        $userName = session()->get('email');
        $workName = $request->input('work_name');

        // Kullanıcının daha önce bu işi başlatıp başlatmadığını kontrol et
        $existingWork = Done::where('user_name', $userName)
                                    ->where('work_name', $workName)
                                    ->exists();

        if ($existingWork) {
            // İş zaten başlatılmış, kullanıcıya uyarı göster
            return back()->with('error', 'Bu iş çoktan tamamlandı.');
        }

        // Başlatılmamışsa, işlemi devam ettir
        $time = $request->input('time');

        // In Progress tablosuna veri ekleme
        Done::create([
            'user_name' => $userName,
            'work_name' => $workName,
            'time' => $time,
        ]);
    InProgress::where('user_name', $userName)
            ->where('work_name', $workName)
            ->update(['status' => 1]);

        // Başarılı ekleme mesajı veya işlem sonrası başka bir işlem yapabilirsiniz
        return redirect()->back()->with('success', 'İş başarıyla başlatıldı.');
    }
	
}
