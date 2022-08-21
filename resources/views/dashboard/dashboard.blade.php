@extends('layout.layout')
@section('content')

<div class="">
    <div class="title text-center text-2xl font-bold text-primary">
        <h1 >Emailing List</h1>
    </div>
    <div class="text-end">
     <button class="bg-primary text-white p-1 rounded showAddEmail mr-4"> <i class="fas fa-user-plus m-1"></i> Add Email</button>
    </div>
    <div class="grid gap-2 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 p-1">
        @foreach ($lists as $list)

        <div class="shadow-md  border p-4">
            <h2 class="my-2 font-bold">{{ $list->name }}</h2>
             <h3 class="my-2">{{ $list->email }}</h3>
             {{-- <p class="text-mute text-light">mail sent: 20</p>
             <p class="text-mute text-light text-sm">last sent: 20</p> --}}
             <div class="text-end text-mute text-sm">Date Added: {{ $list->created_at->diffForHumans() }}</div>
             <div class="button-list text-end">
                 {{-- @include('modals.choose-template') --}}
                <button class="text-primary text-white p-1 px-2 mx-2 rounded border focus:ring-2 showChooseTemplate">
                    <a href="{{ route('email-show-send-mail',$list->id) }}"> <i class="fas fa-paper-plane"></i></a>
                </button>
                 <button>
                    <form action="{{ route('delete_email',$list->id) }}" method="post">
                        @csrf
                        <button class="text-danger text-white p-1 px-2 mx-2 rounded border focus:ring-2"><i class="fas fa-trash"></i></button>
                    </form>
                 </button>

             </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
