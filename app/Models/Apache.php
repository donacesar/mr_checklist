<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apache extends Model
{
    use HasFactory;

    protected $table = 'apaches';
    protected $guarded = [];
}
