<?php
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class Email extends Mailable {
 
    use Queueable,
        SerializesModels;
 
    //build the message.
    public function build() {
        return $this->view('my-email');
    }
}
