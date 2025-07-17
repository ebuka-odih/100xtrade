<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Stock and Order Management
Schedule::command('orders:check-limits')
        ->everyMinute()
        ->withoutOverlapping();

Schedule::command('stocks:update-prices')
             ->everyMinute()
             ->withoutOverlapping();

// Trade Processing and Management
Schedule::command('trades:process-orders')
        ->everyMinute()
        ->withoutOverlapping();

Schedule::command('trades:execute-scheduled')
        ->everyMinute()
        ->withoutOverlapping();

// Trade Maintenance
Schedule::command('trades:fix-statuses')
        ->daily()
        ->at('02:00')
        ->withoutOverlapping();
