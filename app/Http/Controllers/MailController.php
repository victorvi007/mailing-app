<?php

namespace App\Http\Controllers;


use App\Mail\Bybit;
use App\Mail\bitPay;
use App\Mail\kucoin;
use App\Mail\Binance;
use App\Mail\Latoken;
use App\Mail\Blockchain;
use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use App\Repository\MailRepository;
use Illuminate\Support\Facades\Mail;
use App\Repository\HistoryRepository;
use App\Http\Requests\SendMailRequest;
use App\Repository\TemplateRepository;
use App\Repository\MailingListRepository;

class MailController extends Controller
{
    public function apiMailContent(MailRepository $mailRepository){
        $email_content =$mailRepository->getAllMail();
        return $email_content;
    }

    public function mail(MailRepository $mailRepository){
        $mails = $mailRepository->getAllMail();
        // dd($mails);
        return view('dashboard.all-mails',compact('mails'));
    }
    public function showEditMail(MailRepository $mailRepository,TemplateRepository $templateRepository,$id){
        $templetes = $templateRepository->getAllTemplate();
        $mail = $mailRepository->getMail($id);
        return view('dashboard.edit-message',compact('mail','templetes'));
    }

    public function showComposeMail(){

        return view('dashboard.compose-message');
    }
    public function storeComposeMail(MailRequest $request,MailRepository $composeMailRepository){
        $mailStored = $composeMailRepository->storeComposedMail($request);
        $latestMail = $composeMailRepository->getLatestMail();

        if($mailStored){
            return redirect('/edit-mail'.'/'. $latestMail->id)->with('message',['title' => 'Successful', 'message' => 'New Mail Composed!', 'type' => 'success']);
        }
    }

    public function showSendMail(MailRepository $mailRepository,TemplateRepository $templateRepository,$id){
        $mail = $mailRepository->getMail($id);
        $templates = $templateRepository->getAllTemplate();

        return view('dashboard.show-send-mail',compact('mail','templates'));
    }
    public function showEmailSendMail(MailingListRepository $mailingListRepository,TemplateRepository $templateRepository,$id){
        $mail = $mailingListRepository->getMailRecipant($id);

        $templates = $templateRepository->getAllTemplate();

        return view('dashboard.email-show-send-mail',compact('mail','templates'));
    }

    public function send(SendMailRequest $request,HistoryRepository $historyRepository){

        if(isset($request->attachment)){
            $fileExtention =$request->attachment->extension();
            $fileName = str_replace(' ', '-', $request->attachment_name).time().'.'.$fileExtention;
            $storeFile = $request->attachment->move(public_path('attachment'),$fileName);

            $subject = $request->subject;
            $message = $request->message;
            $attachment_name = $request->attachment_name;
            $attachment = $fileName;
        }else{
            $fileExtention =null;
            $subject = $request->subject;
            $message = $request->message;
            $attachment_name = null;
            $attachment = null;
        }



        if($request->template == 'Binance'){

            // dd($message,$subject,$attachment,$fileExtention,$attachment_name);

            $mailSent =  Mail::to($request->email)->send(new Binance($message,$subject,$attachment,$fileExtention,$attachment_name));
        }

        if($request->template == 'KuCoin'){

            $mailSent =  Mail::to($request->email)->send(new kucoin($message,$subject,$attachment,$fileExtention,$attachment_name));
        }

        if($request->template == 'Bitpay'){

            $mailSent =  Mail::to($request->email)->send(new bitPay($message,$subject,$attachment,$fileExtention,$attachment_name));
        }

        if($request->template == 'Latoken'){

            $mailSent =  Mail::to($request->email)->send(new Latoken($message,$subject,$attachment,$fileExtention,$attachment_name));
        }
        if($request->template == 'Blockchain'){

            $mailSent =  Mail::to($request->email)->send(new Blockchain($message,$subject,$attachment,$fileExtention,$attachment_name));
        }
        if($request->template == 'Bybit'){

            $mailSent =  Mail::to($request->email)->send(new Bybit($message,$subject,$attachment,$fileExtention,$attachment_name));
        }
       if($mailSent){
           $historyRepository->createHistory($request);
            return redirect()->back()->with('message',['title' => 'Successful', 'message' => 'Mail Sent!', 'type' => 'success']);
       }
    }



}
