<?php

namespace App\Jobs;

use App\Mail\Gmail;
use http\Client\Curl\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user= $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->user->email;

        $details = [
            'title' => 'Thank You For Signing in',
            'body' => "You Are Successfully Registered to GINIPIK.<br>
            your Username is: $this->user->name <br>
            your Email is: $this->user->email <br>
            your Password is: $this->user->password. <br>
            you Registered at : $this->user->created_at. <br>
            "
        ];

        Mail::to($this->user->email)->send(new Gmail($details));
    }
}
