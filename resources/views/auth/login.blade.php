{{-- @extends('layouts.app')

@section('content')
   <div class="flex justify-center">
       <div class="w-4/12 bg-white p-6 rounded-lg">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">++
                @csrf++

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember"> Remember me </label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded front-medium w-full">Login</button>
                </div>
            </form>
        </div>
   </div>
@endsection --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/registerStyle.css">
</head>
    <body>
        <div class="container" style="margin-top: 50px">
            @if (session('status'))
            <div  style="color:white; text-align:center; margin-bottom:6px; background-color:red; padding: 10px ">
                {{ session('status') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 wrapper">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <img src="./myImages/register-image.jpg" class="img-fluid" alt="" >
                        </div>
                        <div class="col-md-6 form ">
                            <h1 class="text-center mt-5">Log in</h1>
                            <div class="text-center">
                                <form action="{{ route('login') }}" class="form-group mt-5" method="POST">
                                    @csrf
                                    <input type="text" id="email" class="col-md-9 col-10 mt-4" name="email" id="" placeholder="Your email"  @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                                    @error('email')
                                    <div class="text-red-500 mt-2 text-sm" style="color: rgb(231, 96, 96); padding: 10px; padding-top: 0px">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    <input type="password" class="col-md-9 col-10 mt-4 mb-4" name="password" id="password" placeholder="Your password"  @error('password') border-red-500 @enderror" value="">
                                    

                                    @error('password')
                                    <div class="text-red-500 mt-2 text-sm" style="color: rgb(231, 96, 96); padding: 10px; padding-top: 0px">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    <button class="btn col-sm-4 col-10 col-md-4 ml-5 text-white">Login</button>
                                </form>
                            </div>
                                <p class="text-center mt-4" > Don't have an account? Click Here to  <a href="{{ route('register') }}">sign up</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>


