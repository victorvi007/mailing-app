<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\MailRepository;
use App\Http\Requests\ComposeMailRequest;

class ComposeMailController extends Controller
{
    public function mail(){
        
        return view('dashboard.all-mails');
    }
    public function showComposeMail(){
        return view('dashboard.compose-message');
    }
    public function storeComposeMail(ComposeMailRequest $request,MailRepository $mailRepository){
        $mailStored = $mailRepository->storeComposedMail($request);
        if($mailStored){
            return redirect()->back()->with('message',['title' => 'Successful', 'message' => 'New Mail Composed!', 'type' => 'success']);
        }
    }
}
