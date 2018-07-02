<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {
	protected function commands(): void {
		$this->load(__DIR__ . '/Commands');
		/** @noinspection PhpIncludeInspection */
		require base_path('routes/console.php');
	}

	protected function schedule(Schedule $schedule): void {
		$schedule->command('reset --hard')->dailyAt('03:00');
	}
}
