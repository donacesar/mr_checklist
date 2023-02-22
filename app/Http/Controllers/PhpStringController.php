<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TypeController;

class PhpStringController extends TypeController
{
    public const TYPE = 'phpString';
    public string $model_name = 'App\Models\Php\PhpString';

}
