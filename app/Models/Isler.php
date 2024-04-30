<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isler extends Model
{
    use HasFactory;
	protected $table = 'todos';
    protected $fillable = ['id', 'user_name','work_name', 'time', 'status'];
}
