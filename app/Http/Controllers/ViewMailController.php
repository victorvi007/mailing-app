<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewMailController extends Controller
{
    public function viewBinance(){
        return view('mail.binance');
    }
    public function viewKucoin(){
        return view('mail.kucoin');
    }
    public function viewLatoken(){
        return view('mail.latoken');
    }
    public function viewBitpay(){
        return view('mail.bitpay');
    }
    public function viewBlockchain(){
        return view('mail.blockchain');
    }

    public function viewKraken(){
        return view('mail.kraken');
    }
}
