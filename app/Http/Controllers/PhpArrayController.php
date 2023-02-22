<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TypeController;

class PhpArrayController extends TypeController
{
    public const TYPE = 'phpArray';
    public string $model_name = 'App\Models\Php\PhpArray';

}
