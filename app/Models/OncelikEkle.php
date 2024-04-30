<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OncelikEkle extends Model
{
public $timestamps = false;
    use HasFactory;

    protected $table = 'oncelikliisler'; // Veritabanında bu modelin karşılık geldiği tablo adı

    protected $fillable = ['isim']; 
}

