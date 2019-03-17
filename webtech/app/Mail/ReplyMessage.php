<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplyMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $sender_name;
    public $reciver_name;
    public $message_details;
    public function __construct($sender_name,$reciver_name,$message_details)
    {
        $this->sender_name = $sender_name;
        $this->reciver_name = $reciver_name;
        $this->message_details = $message_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $sender_name = $this->sender_name;
        $reciver_name = $this->reciver_name;
        $message_details = $this->message_details;
        return $this->view('mail.mailfadmin',compact('message_details','reciver_name'))->subject($sender_name);
    }
}
