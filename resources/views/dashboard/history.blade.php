@extends('layout.layout')
@section('content')
<div class="">
    <div class="title text-center text-2xl font-bold text-primary">
        <div class="title text-center text-2xl font-black my-6 text-primary">
            <h1 >Mail History</h1>
      </div>
    </div>

    <div class="grid gap-2 grid-cols-1 md:grid-cols-2  p-1">
        @foreach ($histories as $history)

            <div class="shadow-md  border p-4">
                <h1 class="font-light py-2"> Sent to: {{ $history->to }}</h1>
                <h1 class="font-light py-2"> Subject: {{ $history->subject }}</h1>
                <h1 class="font-light py-2"> Template Used: {{ $history->template }} Template</h1>
                <h1 class="font-light py-2"> Time Sent: {{ $history->created_at->diffForHumans() }}</h1>
                <div class="my-4 overflow-hidden  hover:text-clip ">
                    {!! html_entity_decode($history->message) !!}
                </div>


            </div>
        @endforeach


    </div>
</div>
@endsection
