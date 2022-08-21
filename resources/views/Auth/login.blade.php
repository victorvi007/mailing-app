<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('asset/css/output.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <title>Login</title>
</head>
<body>
  <div class="wrapper ">
      <div class="h-screen w-screen flex items-center justify-center">

          <form action="{{ route('sign-login') }}" method="post" class="card border-2 w-96 xm:w-11/12  bg-white shadow shadow md:ml-6 p-10 rounded-md opacity-90">
            @csrf
              <h1 class="text-center text-2xl font-extrabold  mb-6">LOGIN</h1>
              @if(session('status'))
                <div class="text-danger p-2 text-center">{{ session('status') }}</div>
              @endif
              <div class="grid">
                  <div class="grid">
                      <label for="">Email</label>
                      <input type="email" name="email" id="" class="w-100 h-12 border-b-2 border-primary outline-0" >
                      <div class="h-2">
                          @error('email')
                            <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                  </div>


                  <br class=""/>
                  <div class="grid my-4">
                      <label for="">Password</label>
                      <input type="password" name="password" id="" class="w-100 h-12 border-b-2 border-primary outline-0">
                      @error('password')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <br class=""/>
                  <div class="flex  mr-2 my-auto">
                      <input type="checkbox" name="remember" id="rememberMe" class="h-6 mr-2">
                      <label for="rememberMe" class="cursor pointer h-6">Remember Me</label>

                  </div>
                  <div class="grid my-10">
                    <Button class="bg-primary text-white py-2 rounded-md">LOGIN</Button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</body>
</html>
