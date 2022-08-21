<?php

namespace App\Http\Controllers;

use App\Repository\HistoryRepository;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function showHistory(HistoryRepository $historyRepository){
        $histories = $historyRepository->getAllHistory();
        return view('dashboard.history',compact('histories'));
    }
}
