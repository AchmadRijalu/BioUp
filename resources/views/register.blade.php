@extends('layout.main')

@section('title', 'Daftar BioUP')

@section('content')
<div class="bg-white min-h-screen flex text-textalign">
    <div class="bg-white flex min-h-screen justify-center py-36 px-24 w-1/2 ">
        <div class=" w-full text-center">
            <h1 class=" font-bold font text-5xl text-greeny">
                Daftar Akun
            </h1>
            <p class="text-bold opacity-70 ">
                Sudah punya akun? <a href="/login" class="font-bold  hover:text-green-500">Masuk sini</a>
            </p>

            <form action="" method="POST">
                <div class="mt-8 w-full">
                    {{-- <label for="username" class="">Username</label><br> --}}
                    <input type="text" name="username" value="" class=" border-4 border-green-400 font-bold rounded-xl h-10 w-96 focus transition delay-200 font-weight-bold  focus:ring-green-600 text-green-500" placeholder="Username">
                </div>

                <div class="mt-3 w-full mt-4 ">
                    {{-- <label for="email">Email</label><br> --}}
                    <input type="email" name="email" value="" class=" border-4 border-green-400 rounded-xl h-10 w-96 font-bold" placeholder="Email">
                </div>
                <div class="mt-3 w-full mt-4 ">
                    {{-- <label for="email">Password</label><br> --}}
                    <input type="password" name="email" value="" class=" border-4 border-green-400 rounded-xl h-10 w-96 font-bold" placeholder="Password">
                </div>
                <div class="mt-3 w-full mt-4">
                    {{-- <label for="email">Password Confirmation</label><br> --}}
                    <input type="password" name="password_confirmation" value="" class=" border-4 border-green-400 rounded-xl h-10 w-96 font-bold" placeholder="Password Confirmation">
                </div>
                <div class="mt-8 w-100 mt-4 flex flex-column justify-center">
                    <button class="bg-greeny w-72 h-12 text-2xl border-2  rounded-2xl text-white  active:bg-green-700 hover:bg-green-400 transition delay-50 " type="submit">
                        Daftar
                    </button>
                </div>
                



            </form>

        </div>

    </div>
    <div class="bg-greeny flex min-h-screen py-48 flex justify-center w-1/2">

            <img src="{{asset('image/BioUp! Logo.png')}}" alt="" class="w-80 h-80 ">
    </div>

</div>
@endsection
