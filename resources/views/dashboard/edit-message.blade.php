@extends('layout.layout')
@section('content')
<div class="">
    <div class="title text-center text-2xl font-black my-6 text-primary">
        <h1 >Edit mail</h1>
     </div>

     <div class="flex justify-center">

         <div class="textarea w-full md:w-4/6 ">
            <div class="text-end">
                @include('modals.choose-template')
                <button class="showChooseTemplate text-danger text-white p-1 px-2 mx-2 rounded border focus:ring-2 hover:bg-primary hover:text-white"><i class="fas fa-eye"></i> Preview</button>
            </div>
             <form action="{{ route('store-compose-mail') }}" method="post">
                @csrf
                 <input type="text" value="{{ $mail->name }}" name="name" placeholder="Save As " id="" class="w-full border h-10 border-mute rounded my-4 pl-2 outline-0">
                 <textarea id="mytextarea" class="h-96 rounded" name="message">{{ $mail->message }}</textarea>
                 <div class="text-end">
                     {{-- <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500   p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-4">
                         <option selected>Choose a Template</option>
                         <option value="US">Binace</option>
                         <option value="CA">Culcoin</option>
                     </select> --}}
                     <br/>
                     <button class="bg-primary text-white px-4 rounded px-4 py-2">Save Changes</button>
                     {{-- <button> --}}
                        <a href="{{ route('show-send-mail',$mail->id) }}">
                            <button type="button" class="text-primary text-white p-1 px-2 mx-2 rounded border focus:ring-2 hover:bg-primary hover:text-white">Next <i class="fas fa-arrow-right"></i> </button>
                        </a>
                    {{-- </button> --}}
                 </div>
             </form>
         </div>
     </div>
</div>
@endsection
