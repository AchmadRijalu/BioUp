@extends('layout.main')

@section('title', "Login")

@section('content')

<div class="bg-white min-h-screen flex ">

    <div class="bg-greeny flex min-h-screen py-60 flex justify-center w-1/2">

            <img src="{{asset('image/BioUp! Logo.png')}}" alt="" class="w-76 h-64 ">
    </div>
    <div class="bg-white flex min-h-screen justify-center py-36 px-24 w-1/2 ">
        <div class=" w-full ">
            <h1 class="text-green-500 font-bold font text-5xl">
                Login
            </h1>
            <form action="" method="POST">
                <div class="mt-12 w-80 ">
                    <label for="email">Username</label><br>
                    <input type="text" name="email" value="" class=" border-4 border-green-400 rounded-xl h-10 w-full" placeholder="Username">
                </div>
                <div class="mt-3 w-80 mt-4">
                    <label for="email">Password</label><br>
                    <input type="password" name="email" value="" class=" border-4 border-green-400 rounded-xl h-10 w-full" placeholder="Password">
                </div>
                <div class="mt-8 w-100 mt-4 flex flex-column justify-between">
                    <p>
                        <a href="" class="text-black opacity-40">Forgot Password?</a>
                    </p>
                    <button class="bg-green-600 w-40 h-12 text-2xl border-2 rounded-2xl text-white active:bg-green-700" type="submit">
                        Login
                    </button>
                </div>


                <div class="w-100 mt-16 rounded-3xl">
                    <button type="submit" class="bg-green-400 w-full h-16 rounded-3xl font-bold text-white active:bg-green-700">
                        Tidak punya akun? Daftar disini
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
