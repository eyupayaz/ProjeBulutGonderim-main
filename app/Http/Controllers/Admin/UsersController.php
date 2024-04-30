<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User; // Uye modelini dahil ediyoruz
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function index()
    {
        $datalist = User::all();
        return view('admin.user', ['datalist'=>$datalist]);
    }


    public function destroy($user_id)
{
    DB::table('uyeler')->where('user_id', $user_id)->delete();
    return redirect()->route('admin_user');
}


    public function edit(user $user, $user_id)
    {
        $data = User::find($user_id);
        $datalist = DB::table('uyeler')->get()->where('user_id',0);
        return view('admin.user_edit',['data' => $data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user_id)
{
        // Kullanıcıyı bul
        $data = User::find($user_id);
        // Kullanıcı adı, e-posta ve parola alanlarını güncelle
        $data->user_name = $request->input('user_name');
        $data->email = $request->input('email');
        
        // Parolayı güncellemeden önce hashle
        if ($request->has('password')) {
            $data->password = Hash::make($request->input('password'));
        }

        // Kullanıcıyı kaydet
        $data->save();

        // Başarılı bir şekilde güncellendikten sonra yönlendirme yap
        return redirect()->route('admin_user')->with('success', 'Kullanıcı güncellendi!');
    } 
}


