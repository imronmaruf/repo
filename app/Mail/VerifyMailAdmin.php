<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyMailAdmin extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $admin;

    /**
     * Create a new message instance.
     */
    public function __construct($admin)
    {
        $this->admin = $admin;   
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Verifikasi Akun')->view('auth.mail.verify_admin');
    }
}
