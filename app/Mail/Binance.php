<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Binance extends Mailable
{
    use Queueable, SerializesModels;

        public $message,$subject,$attachment,$fileExtention,$attachment_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$subject,$attachment,$fileExtention,$attachment_name)
    {
       $this->message = $message;
       $this->subject= $subject;
       $this->attachment = $attachment;
       $this->fileExtention = $fileExtention;
       $this->attachmentName = $attachment_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->attachment == null){
               //env('MAIL_FROM_ADDRESS')
        return $this->from('no-reply@binance.com')->subject($this->subject)->cc('no-reply@binance.com')->markdown('mail.binance');
        }else{

            //env('MAIL_FROM_ADDRESS')
            return $this->from('no-reply@binance.com')->subject($this->subject)->cc('no-reply@binance.com')->markdown('mail.binance')->attach(public_path('attachment/'.$this->attachment),[
                'as'=>$this->attachmentName.'.'.$this->fileExtention

            ]);
        };
    }
}