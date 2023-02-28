<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mytest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Мои всякие тестилки';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dd(PHP_SAPI);
        return Command::SUCCESS;
    }
}
