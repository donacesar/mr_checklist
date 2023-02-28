<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regexp extends Model
{
    use HasFactory;

    protected $table = 'regexps';
    protected $guarded = [];
}
