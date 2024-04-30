<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OncelikGoruntule extends Model
{
    use HasFactory;
	protected $table = 'oncelikliisler';
    protected $fillable = ['is_id', 'user_mail', 'work_name', 'siralama'];
}
