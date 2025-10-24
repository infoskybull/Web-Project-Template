<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Throwable;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
    
        var_dump(env('APP_URL'));
        exit;
        
        $this->info('DB connection checking...');

        try {
            $result = DB::select('SELECT 1 as test');
            $this->info('success connection to MySQL DB!');
            $this->info('result: ' . json_encode($result));
        } catch (Throwable $e) {
            $this->error('? error on MySQL connection: ' . $e->getMessage());
            $this->line('check DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD variables in .env file');
        }

        return 0;
    }
}
