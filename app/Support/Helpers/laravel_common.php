<?php
// -------------------------Функции Хелперы для Laravel-----------------

if (!function_exists('transaction')) {
    function transaction(Closure $callback, int $attempts = 1): mixed
    {

        if (\Illuminate\Support\Facades\DB::transactionLevel() > 0) {
            return $callback();
        }



        return  \Illuminate\Support\Facades\DB::transaction($callback, $attempts);
    }
}
