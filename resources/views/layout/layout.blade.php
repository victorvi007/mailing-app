<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>

    <script type="text/javascript">
        tinymce.init({
          selector: '#mytextarea',

          plugins: [
      'advlist autolink link file media image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css',
    file_browser_callback_types: 'file image media'

        });
        </script>
    <link rel="stylesheet" href="{{ asset('asset/fontawesome-pro-5.13.0-web/css/all.min.css') }}">
    <link href="{{ asset('asset/css/output.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <title>Dashboard</title>
</head>
<body>
    <div class="h-full">
        <div class="harmbugger absolute block md:hidden text-xl p-1 px-2 left-5 border bg-primary text-white rounded  openMenu"><i class="fas fa-bars"></i></div>
       <div class="flex  h-screen">
           <div class="text-white hidden md:block w-1/5">
               <div class="bg-primary h-full text-center ">
                   <div class="text-2xl py-4 font-bold">
                      <h1>🙂</h1>
                       Mail Clown

                    </div>
                   <div class="mt-4 ml-0 mr-0 flex flex-col">
                           <a href="{{ route('dashboard') }}" class="w-100  py-2 block hover:text-mute my-2"><button class="w-100 "> <i class="fas fa-user mx-2"></i> <span class="hidden md:inline-block">Dashboard</span> </button></a>
                           <a href="{{ route('mail') }}" class="w-100  py-2 block hover:text-mute my-2"><button class="w-100 "> <i class="fas fa-list m-1"></i> <span class="hidden md:inline-block">Mail</span> </button></a>
                           <a href="{{ route('compose-mail') }}" class="w-100  py-2 block hover:text-mute my-2"><button class="w-100 "> <i class="fas fa-feather"></i> <span class="hidden md:inline-block">Compose Mail</span> </button></a>
                           <a href="#" class="w-100  py-2 block hover:text-mute my-2 showAddEmail"><button class="w-100 "> <i class="fas fa-user-plus m-1"></i> <span class="hidden md:inline-block">Add Email</span> </button></a>
                           <a href="{{ route('history') }}" class="w-100  py-2 block hover:text-mute my-2"><button class="w-100 "> <i class="fas fa-history"></i> <span class="hidden md:inline-block">History</span> </button></a>
                           <a href="#" class="w-100  py-2 block hover:text-mute my-2 text-danger"> <form action="{{ route('logout') }}" method="post"> @csrf<button class="w-100 "> <i class="fas fa-sign-out-alt"></i> <span class="hidden md:inline-block">Logout</span> </button></form> </a>

                   </div>
               </div>
           </div>
           <div class="text-white block md:hidden w-1/5 absolute h-screen mobileMenu z-10">
               <div class="bg-primary h-full text-center ">
                <div class="harmbugger text-white left-8 text-xl p-2 closeMenu"><i class="fas fa-times"></i></div>
                   <div class="text-2xl py-4 font-bold">🙂</div>
                   <div class="mt-4 ml-0 mr-0 flex flex-col">
                            <a href="{{ route('dashboard') }}" class="w-100  py-2 block hover:text-mute my-2"><button class="w-100 "> <i class="fas fa-user mx-2"></i> <span class="hidden md:inline-block">Dashboard</span> </button></a>
                            <a href="{{ route('mail') }}" class="w-100  py-2 block hover:text-mute my-2"><button class="w-100 "> <i class="fas fa-list m-1"></i> <span class="hidden md:inline-block">Mail</span> </button></a>
                            <a href="{{ route('compose-mail') }}" class="w-100  py-2 block hover:text-mute my-2"><button class="w-100 "> <i class="fas fa-feather"></i> <span class="hidden md:inline-block">Compose Mail</span> </button></a>
                            <a href="#" class="w-100  py-2 block hover:text-mute my-2 showAddEmail"><button class="w-100 "> <i class="fas fa-user-plus m-1"></i> <span class="hidden md:inline-block">Add Email</span> </button></a>
                            <a href="{{ route('history') }}" class="w-100  py-2 block hover:text-mute my-2"><button class="w-100 "> <i class="fas fa-history"></i> <span class="hidden md:inline-block">History</span> </button></a>
                            <a href="{{ route('logout') }}" class="w-100  py-2 block hover:text-mute my-2 text-danger"><button class="w-100 "> <i class="fas fa-sign-out-alt"></i> <span class="hidden md:inline-block">Logout</span> </button></a>
                   </div>
               </div>
           </div>
           <div class="w-full h-screen overflow-y-auto border">
                @yield('content')
           </div>
           @include('modals.add-email')
       </div>
    </div>

    @if(Session::has('message'))

    <script src="{{ asset('node_modules\sweetalert\dist\sweetalert.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
            swal({
                title: "{{ Session::get('message')['title'] }}",
                text: "{{ Session::get('message')['message'] }}",
                icon: "{{ Session::get('message')['type'] }}",
            })
        })()

    </script>
    @endif
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>
</html>
