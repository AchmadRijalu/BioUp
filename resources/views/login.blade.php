@extends('layout.main')

@section('title', "Login BioUP")

@section('content')

<div class="lg:bg-white lg:min-h-screen lg:flex lg:flex-row  ">

    <div class=" lg:bg-greeny lg:flex lg:min-h-screen lg:flex-col lg:justify-center lg:items-center lg:w-1/2 md:bg-greeny  md:flex md:h-screen  md:flex-col md:justify-center md:items-center md:w-full sm:bg-greeny sm:min-h-screen  sm:flex sm:flex-col sm:justify-center sm:items-center mini:bg-greeny  mini:min-h-screen  mini:flex mini:flex-col mini:justify-center mini:items-center">
        {{-- py-48 --}}
            <img src="{{asset('image/BioUp! Logo.png')}}" alt="" class="w-72 h-72 ">
            <h1 class="text-2xl text-center font-poppins font-bold text-white">
                Biologi Kelas
                <p class="text-white">
                    XII
                </p>
            </h1>
            {{-- w-80 h-80 --}}
    </div>
    <div class="lg:bg-white  lg:min-h-screen lg:px-24 lg:flex lg:m-auto lg:items-center lg:w-1/2 md:min-h-screen md:px-24 md:flex md:m-auto md:items-center md:w-full // sm:min-h-screen sm:px-24 sm:flex sm:m-auto sm:items-center sm:w-full  mini:h-screen mini:px-6 mini:flex mini:m-auto mini:items-center mini:w-full">
        {{-- py-36 px-24 --}}
        <div class=" w-full">
            <h1 class="text-green-500 font-bold font text-5xl font-poppins">
                Login
            </h1>
            <form action="" method="POST">
                <div class="mt-12 w-80 ">
                    {{-- <label for="email" class="text-greeny">Username</label><br> --}}
                    <input type="text" name="email" value="" class=" font-poppins border-4 border-green-400 font-bold rounded-xl h-10 w-full focus transition delay-200 font-weight-bold  focus:ring-green-600 text-green-500" placeholder="Username">
                </div>
                <div class="mt-3 w-80 mt-4">
                    {{-- <label for="email">Password</label><br> --}}
                    <input type="password" name="email" value="" class=" font-poppins border-4 border-green-400 rounded-xl h-10 w-full font-bold" placeholder="Password">
                </div>
                <div class="mt-8 w-100 mt-4 flex flex-column justify-between">
                    <p>
                        <a href="" class="text-black opacity-40">Lupa Password?</a>
                    </p>
                    <button class="bg-green-500 w-40 h-12 text-2xl border-2  rounded-3xl text-white font-bold active:bg-green-700 hover:bg-green-400 transition delay-50 font-poppins  flex justify-content-center justify-center items-center" type="submit">
                        Login
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                          </svg>
                    </button>
                </div>



            </form>
            <div class="w-100 mt-16 rounded-3xl">
                <button type="submit" class="bg-green-500 w-full flex flex-column justify-center items-center h-16 rounded-3xl font-bold text-white transform scale-75 hover:bg-green-400 hover:scale-100 transition delay-50 text-xl font-poppins" onclick="location.href='/register'">
                    Tidak punya akun? Daftar disini

                </button>
            </div>
        </div>

    </div>
</div>
@endsection
