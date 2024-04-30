<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Done extends Model
{
  use HasFactory;

    protected $table = 'done';

    protected $fillable = [
        'user_name',
        'work_name',
        'time',
    ];

    public $timestamps = false; // Bu satırı ekleyin
}
