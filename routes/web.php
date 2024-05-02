<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtananIslerController;
// Gereksiz kod fazlalığı nedeniyle yorum satırına alındı use App\Http\Controllers\IsSiralaBacklogController;
use App\Http\Controllers\OncelikEkleController;
use App\Http\Controllers\OncelikListeleController;
use App\Http\Controllers\MesajgonderController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route as RouteFacade;
use App\Http\Middleware\AuthenticateUser;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\IsatamaController;
use App\Http\Controllers\admin\atamayapController;
use App\Http\Middleware\CheckRole;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/index', function () {
    return view('index');
})->middleware('auth.user');

Route::get('/iletisim', function () {
    return view('iletisim');
})->middleware('auth.user');

Route::get('/', function () {
    return view('giris');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/takvim', function () {
    return view('takvim');
});
Route::get('/atananisler', function () {
    return view('atananisler');
});
Route::get('/islerisiralama', function () {
    return view('islerisiralama');
});
Route::get('/iletisim', function () {
    return view('iletisim');
});
Route::get('/atananisler', [AtananIslerController::class, 'index']);
// Route::get('/islerisiralama', [IsSiralaBacklogController::class, 'index']);


// Örnek rotalar
Route::get('/atananisler', [TodoController::class, 'index'])->name('atanan.isler');

Route::post('/start-work', [TodoController::class, 'startWork'])->name('start.work');

Route::post('/finish-work', [TodoController::class, 'finishWork'])->name('finish.work');

Route::get('/takvim', [CalendarController::class, 'index']);

Route::get('/islerisiralama', [OncelikListeleController::class, 'index']);

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/kaydet', [OncelikEkleController::class, 'store'])->name('kaydet');

Route::get('/', 'App\Http\Controllers\AuthController@index');
Route::post('/', 'App\Http\Controllers\AuthController@login');
Route::get('/iletisim', function () {
    return view('iletisim');
});

Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
// routes/web.php
// routes/web.php




Route::post('/iletisim-kaydet', [MesajgonderController::class, 'store']);


Route::post('/save-priority', [PriorityController::class, 'savePriority'])
    ->name('savePriority')
    ->middleware('canAccessPriority');


//admin 
Route::get('/admin/index', [HomeController::class, 'index'])->name('admin');

//mesajlar
Route::get('/admin', [HomeController::class, 'index']);

Route::get('/admin/iletisim', [MesajgonderController::class, 'index'])->name('admin_iletisim');
Route::post('iletisim/create', [MesajgonderController::class, 'create'])->name('admin_iletisim_create');
Route::get('/admin/iletisim/delete/{mesaj_id}', [MesajgonderController::class, 'destroy'])->name('admin_iletisim_delete');


//Route::post('/admin/goster', [MesajgonderController::class, 'goster'])->name('admin_goster');



//users

    Route::get('/admin', [HomeController::class, 'index']);

    Route::get('/admin/user', [UsersController::class, 'index'])->name('admin_user');
    Route::post('user/create', [UsersController::class, 'create'])->name('admin_user_create');
    Route::get('/admin/user/delete/{user_id}', [UsersController::class, 'destroy'])->name('admin_user_delete');
    Route::get('admin/edit/{user_id}', [UsersController::class, 'edit'])->name('admin_user_edit');
    Route::post('update/{user_id}', [UsersController::class, 'update'])->name('admin_user_update');
    Route::get('show', [UsersController::class, 'show'])->name('admin_user_show');

//İs Atama

Route::get('/admin/isatama/delete/{id}', [IsatamaController::class, 'destroy'])->name('admin_isatama_delete');

Route::get('/admin', [HomeController::class, 'index']);

    Route::get('/admin/isatama', [IsatamaController::class, 'index'])->name('admin_isatama');
    Route::post('/admin/isatama/create', [IsatamaController::class, 'create'])->name('admin_isatama_create');
    Route::get('admin/isatama/edit/{id}', [IsatamaController::class, 'edit'])->name('admin_isatama_edit');
    Route::post('admin/update/{id}', [IsatamaController::class, 'update'])->name('admin_isatama_update');
    Route::get('/admin/isatama_add', [IsatamaController::class, 'add'])->name('admin_isatama_add');



    Route::middleware(['role:1'])->group(function () {
        // Yalnızca adminlerin erişebileceği sayfalar
        Route::get('/admin', [AuthController::class, 'login']);
    });
    
   

   
   
