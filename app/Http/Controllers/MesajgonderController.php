<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesajgonder;
use Illuminate\Support\Facades\DB;


class MesajgonderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'message_title' => 'required|string|max:255',
            'user_message' => 'required|string',
        ]);

        $mesaj = new Mesajgonder;
        $mesaj->user_name = $request->user_name;
        $mesaj->user_title = $request->message_title;
        $mesaj->user_message = $request->user_message;
        $mesaj->message_date = now()->toDateString(); 
        $mesaj->save();

        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi!');
    }





    public function destroy($mesaj_id)
{
    DB::table('iletisim')->where('mesaj_id', $mesaj_id)->delete();
    return redirect()->route('admin_iletisim');
}

    public function index()
    {
        $datalist = Mesajgonder::all();
        return view('admin.iletisim', ['datalist'=>$datalist]);
    }
}
