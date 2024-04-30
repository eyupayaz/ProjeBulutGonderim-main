<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User; // Uye modelini dahil ediyoruz

class AuthController extends Controller
{
    public function index()
    {
        return view('giris');
    }

 public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    // Kullanıcıyı veritabanından sorgula
    $user = User::where('email', $email)->first();

    if ($user && Hash::check($password, $user->password)) {
        // Giriş başarılı, kullanıcıyı oturuma al
        session()->put('email', $email);

        // Kullanıcıyı /index sayfasına yönlendir
        return view('index', ['email' => $email]);
    } else {
        // Giriş başarısız
        return redirect('/')->with('error', 'E-posta veya şifre hatalı');
    }
}


	public function logout()
{
    auth()->logout();
    return redirect('/');
}
 public function register(Request $request)
    {
        // Formdan gelen verileri al
        $userData = $request->only(['email', 'user_name', 'password']);

   $existingUser = User::where('email', $userData['email'])->first();

    // Eğer kullanıcı zaten varsa hata döndür
    if ($existingUser) {
        return redirect()->back()->with('alert', 'Bu email adresi zaten kullanılıyor.');
    }
        // Veritabanına ekle
        $user = new User;
        $user->email = $userData['email'];
        $user->user_name = $userData['user_name'];
        $user->password = bcrypt($userData['password']); // Şifreyi hash'le
        $user->save();

        // Başarılı bir şekilde kaydedildiğine dair bir mesaj döndür
        return redirect()->back()->with('alert', 'Üye başarıyla kaydedildi.');
    }


}



