<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docker extends Model
{
    use HasFactory;

    protected $table = 'dockers';
    protected $guarded = [];
}
