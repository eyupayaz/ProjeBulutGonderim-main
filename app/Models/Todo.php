<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'work_name',
        'time',
        'status',
    ];

    public $timestamps = false; // Zaman damgalarını devre dışı bırakır
}
