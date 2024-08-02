<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $reservas;

    /**
     * Create a new job instance.
     */
    public function __construct(array $reservas)
    {
        $this->reservas = $reservas;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::send('emails.trip', ['trip' => $this->reservas], function ($message) {
            $message->from('supertours2024@outlook.com', 'Super Tours');
            $message->to(['karennavas333@gmail.com','andreadeveloper18@gmail.com','arsabuma2023@gmail.com']);
        });
    }
}
