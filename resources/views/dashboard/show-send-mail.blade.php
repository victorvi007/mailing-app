@extends('layout.layout')
@section('content')
<div class="">
    <div class="title text-center text-2xl font-black my-6 text-primary">
        <h1 >Send mail</h1>
     </div>

     <div class="flex justify-center">

         <div class="textarea w-full md:w-4/6 ">
             <form action="{{ route('send') }}" method="post" enctype="multipart/form-data">
                @csrf
                 <input type="email" value="" name="email" placeholder="Send To " id="" class="w-full border h-10 border-mute rounded my-1 pl-2 outline-0">
                 <input type="text" value="" name="subject" placeholder="Subject" id="" class="w-full border h-10 border-mute rounded my-1 pl-2 outline-0">
                  <select required id="template" name="template" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500   p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-1">
                         <option >Choose a Template</option>
                         @foreach ($templates as $template)
                            <option value="{{ $template->name }}" class="py-4">{{ $template->name }}</option>
                         @endforeach
                     </select>
                 <textarea id="mytextarea" class="h-96 rounded" name="message">{{ $mail->message }}</textarea>
                 <input type="file" name="attachment" id="attachment" class="form-control my-2">
                 <input type="text" name="attachment_name" id="attachment_name" placeholder="Attachement name (Optional If no attachment added)" class="w-full border h-10 border-mute rounded my-1 pl-2 outline-0">
                 <div class="text-end">

                     <br/>
                     <button class="bg-primary text-white px-4 rounded px-4 py-2"> <i class="fas fa-paper-plane mx-1"></i>Send</button>
                 </div>
             </form>
         </div>
     </div>
</div>
<script>
    let fileInput = document.getElementById('attachment');
    let attachmentName = document.getElementById('attachment_name');
    fileInput.addEventListener('change',()=>{
        console.log('changed');
        attachmentName.setAttribute('required','true')
    })
</script>
@endsection
