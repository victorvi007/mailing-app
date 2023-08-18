<?php

namespace App\Http\Controllers;

use App\Repository\MailRepository;
use Illuminate\Http\Request;
use App\Repository\TemplateRepository;

class PreviewTemplateController extends Controller
{
   public function preview(TemplateRepository $templateRepository,MailRepository $mailRepository ,$templete,$mail_id){
       $getTemplate = $templateRepository->getTemplate($templete);
       $getMail = $mailRepository->getMail($mail_id);

       if($getTemplate->name == 'Binance'){
        return view('mail.preview.binance',compact('getMail'));
       }
       if($getTemplate->name == 'KuCoin'){
            return view('mail.preview.kucoin',compact('getMail'));
       }
       if($getTemplate->name == 'Bitpay'){
            return view('mail.preview.bitpay',compact('getMail'));
       }
       if($getTemplate->name == 'Latoken'){
            return view('mail.preview.latoken',compact('getMail'));
       }
       if($getTemplate->name == 'Blockchain'){
            return view('mail.preview.blockchain',compact('getMail'));
       }
       if($getTemplate->name == 'Bybit'){
            return view('mail.preview.bybit',compact('getMail'));
       }

   }


}
