<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class IsatamaController extends Controller
{
    public function index()
    {
        $datalist = Todo::all();
        return view('admin.isatama', ['datalist'=>$datalist]);
    }


    public function destroy($id)
{
    DB::table('todos')->where('id', $id)->delete();
    return redirect()->route('admin_isatama');
}


    public function edit($id)
    {
        $data = Todo::find($id);
        $datalist = DB::table('todos')->get()->where('id',0);
        return view('admin.isatama_edit',['data' => $data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
        // Kullanıcıyı bul
        $data = Todo::find($id);
        // Kullanıcı adı, e-posta ve parola alanlarını güncelle
        $data->user_name = $request->input('user_name');
        $data->work_name = $request->input('work_name');
        $data->time= $request->input('time');
        

        // Kullanıcıyı kaydet
        $data->save();

        // Başarılı bir şekilde güncellendikten sonra yönlendirme yap
        return redirect()->route('admin_isatama')->with('success', 'Kullanıcı güncellendi!');
    } 

    public function add()
  {
      $datalist = DB::table('todos')->get()->where('id',0);
      return view('admin.isatama_add', ['datalist' => $datalist]);
  }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @return void
     */

    public function create(Request $request)
  {
      DB::table('todos')->insert([
          'user_name' => $request->input('user_name'),
          'work_name' => $request->input('work_name'),
          'time' => $request->input('time'),
      ]); 
      return redirect()->route('admin_isatama');
  }

 

}
