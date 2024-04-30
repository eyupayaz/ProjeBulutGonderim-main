<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesajgonder extends Model
{
    use HasFactory;
	public $timestamps = false;
    use HasFactory;

    protected $table = 'iletisim'; // Veritabanında bu modelin karşılık geldiği tablo adı
 protected $fillable = ['user_name', 'user_title', 'user_message', 'message_date']; // Dolgu alanları
 
}
