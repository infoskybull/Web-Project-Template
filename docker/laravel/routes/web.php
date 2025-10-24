<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        $result = DB::select('SELECT 1 as test');
        $dbStatus = !!$result[0]->test ?? 'No result';
    } catch (\Exception $e) {
        $dbStatus = 'DB Error: ' . $e->getMessage();
    }
    return view('welcome', [
        'appUrl' => env('APP_URL'),
        'VITE_APP_URL' => env('VITE_APP_URL'),
        'dbStatus' => $dbStatus,
    ]);
});
