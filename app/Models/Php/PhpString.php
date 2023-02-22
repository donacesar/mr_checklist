<?php

namespace App\Models\Php;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhpString extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'php_strings';
}
