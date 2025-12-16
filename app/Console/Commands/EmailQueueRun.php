<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class EmailQueueRun extends Command
{
    protected $signature = 'email:queue-run';
    protected $description = 'Run Email queue worker and stop when empty';

    public function handle()
    {

        $lock = Cache::lock('email-queue-run-lock', 3600);

        if (!$lock->get()) {
            $this->info('Another process is already running.');
            return;
        }

        try {

            // Step 2: Run the queue worker to process jobs in background
            if (app('queue')->size('email') > 0) {
                Artisan::call('queue:work', [
                    '--queue' => 'email',
                    '--stop-when-empty' => true,
                ]);
            }
        } finally {
            $lock->release();
        }
    }

}
