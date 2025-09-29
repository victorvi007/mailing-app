<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class kucoin extends Mailable
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
            //env('MAIL_FROM_ADDRESS')
            return $this->from('no-reply@no-replyy.com', $this->templateName)->cc('no-reply@kucoin.com')->subject($this->subject)->cc('no-reply@kucoin.com')->markdown('mail.kucoin');
        }else{

            //env('MAIL_FROM_ADDRESS')
            return $this->from('no-reply@no-replyy.com', $this->templateName)->cc('no-reply@kucoin.com')->subject($this->subject)->cc('no-reply@kucoin.com')->markdown('mail.kucoin')->attach(public_path('attachment/'.$this->attachment),[
                'as'=>$this->attachmentName.'.'.$this->fileExtention

            ]);
        };

    }
}
