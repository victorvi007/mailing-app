<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\EmailRequest;
use App\Repository\MailingListRepository;

class DashboardController extends Controller
{
    public function showDashboard(MailingListRepository $mailingListRepository){
        $lists = $mailingListRepository->getAllMailingList();

        return view('dashboard.dashboard',compact('lists'));
    }
    public function add_email(MailingListRepository $mailingListRepository,EmailRequest $request){
        $addEmail =$mailingListRepository->storeEmail($request);
        if($addEmail){
            return redirect()->back()->with('message',['title' => 'Successful', 'message' => 'New Email Added!', 'type' => 'success']);
        }
    }
    public function delete_email(MailingListRepository $mailingListRepository, $id){
        $addEmail =$mailingListRepository->deleteEmail($id);
        if($addEmail){
            return redirect()->back()->with('message',['title' => 'Successful', 'message' => 'Email Deleted!', 'type' => 'success']);
        }
    }
}
