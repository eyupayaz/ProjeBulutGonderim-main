<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InProgress extends Model
{
    use HasFactory;

    protected $table = 'in_progress';

    protected $fillable = [
        'user_name',
        'work_name',
        'time',
		'status',
    ];

    public $timestamps = false; // Bu satırı ekleyin
}
