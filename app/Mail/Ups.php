<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Ups extends Mailable
{
    use Queueable, SerializesModels;
    public $message,$subject,$attachment,$fileExtention,$attachmentName,$templateName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$subject,$attachment,$fileExtention,$attachmentName,$templateName)
    {
        $this->message = $message;
        $this->subject= $subject;
        $this->attachment = $attachment;
        $this->fileExtention = $fileExtention;
        $this->attachmentName = $attachmentName;
        $this->templateName = $templateName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        if($this->attachment == null){
            return $this->from('no-reply@no-replyy.com', $this->templateName) // Add the name here
                ->cc('no-reply@ups.com')
                ->subject($this->subject)
                ->cc('no-reply@ups.com')
                ->markdown('mail.ups');
        }else{
            return $this->from('no-reply@no-replyy.com', $this->templateName) // Add the name here
                ->cc('no-reply@ups.com')
                ->subject($this->subject)
                ->cc('no-reply@ups.com')
                ->markdown('mail.ups')
                ->attach(public_path('attachment/'.$this->attachment),[
                    'as' => $this->attachmentName.'.'.$this->fileExtention
                ]);
        };

    }
}
