<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterdUser extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
    public function build()
    {
        return $this->subject('This is the subject of the last email')
            ->markdown('emil.registerd_user')
            ->with('user', $this->user);
    }
}
