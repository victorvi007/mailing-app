@extends('layout.layout')
@section('content')
<div class="">
    <div class="title text-center text-2xl font-bold text-primary">
        <div class="title text-center text-2xl font-black my-6 text-primary">
            <h1 >All  Mail Available</h1>
      </div>
    </div>
    <div class="text-end">
     <button class="bg-primary text-white p-1 rounded"> <i class="fas fa-user-plus m-1"></i> Add Email</button>
    </div>
    <div class="grid gap-2 grid-cols-1 md:grid-cols-2  p-1">
        @foreach ($mails as $mail)

            <div class="shadow-md  border p-4">
                <h1 class="font-bold">{{ $mail->name }}</h1>
                <div class="my-4 overflow-hidden  hover:text-clip h-44">
                    {!! html_entity_decode($mail->message) !!}
                </div>

                <div class="button-list text-end">
                    {{-- <button class="text-danger text-white p-1 px-2 mx-2 rounded border focus:ring-2 hover:bg-primary hover:text-white"><i class="fas fa-eye"></i></button> --}}
                    <button>
                        <a href="{{ route('show-edit-mail',$mail->id) }}">
                            <button class="text-primary text-white p-1 px-2 mx-2 rounded border focus:ring-2 hover:bg-primary hover:text-white"><i class="fas fa-edit"></i>Edit</button>
                        </a>
                    </button>
                    <button>
                        <a href="{{ route('show-send-mail',$mail->id) }}">
                            <button class="text-primary text-white p-1 px-2 mx-2 rounded border focus:ring-2 hover:bg-primary hover:text-white"><i class="fas fa-paper-plane mx-1"></i>Send</button>
                        </a>
                    </button>

                </div>
            </div>
        @endforeach


    </div>
</div>
@endsection
