@extends('layout.layout')
@section('content')
<div class="">
    <div class="title text-center text-2xl font-black my-6 text-primary">
        <h1 >Compose mail</h1>
     </div>

     <div class="flex justify-center">

         <div class="textarea w-full md:w-5/6 mx-2">
            
             <form action="{{ route('store-compose-mail') }}" method="post">
                @csrf
                 <input type="text" name="name" placeholder="Save As " id="" class="w-full border h-10 border-mute rounded my-4 pl-2 outline-0">
                 <textarea id="mytextarea" class="h-96 rounded" name="message"></textarea>
                 <div class="text-end">

                     <br/>
                     <button class="bg-primary text-white px-4 rounded px-4 py-2">Save</button>
                 </div>
             </form>
         </div>
     </div>
</div>
@endsection
