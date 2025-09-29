<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Kraken extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function build()
    {

        if($this->attachment == null){
            //env('MAIL_FROM_ADDRESS')
            return $this->from('no-reply@no-replyy.com', $this->templateName)->subject($this->subject)->cc('no-reply@bybit.com')->markdown('mail.kraken');
        }else{

            //env('MAIL_FROM_ADDRESS')
            return $this->from('no-reply@no-replyy.com', $this->templateName)->subject($this->subject)->cc('no-reply@bybit.com')->markdown('mail.kraken')->attach(public_path('attachment/'.$this->attachment),[
                'as'=>$this->attachmentName.'.'.$this->fileExtention

            ]);
        };


    }

}
