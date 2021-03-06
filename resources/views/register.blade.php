<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

</body>

</html>
<div
    class="lg:bg-white lg:min-h-screen  lg:flex lg:flex-row md:flex md:flex-col-reverse sm:flex sm:flex-col-reverse mini:flex mini:flex-col-reverse">
    <div
        class="lg:bg-white lg:flex lg:min-h-screen lg:justify-center lg:flex-col lg:items-center lg:w-8/12 // md:flex md:min-h-screen md:justify-center md:flex-col md:items-center md:w-screen // sm:flex sm:min-h-screen sm:justify-center sm:flex-col sm:items-center sm:w-screen // mini:flex mini:min-h-screen mini:justify-center mini:flex-col mini:items-center mini:w-screen">
        <div class=" w-full text-center ">
            <h1 class=" font-bold font text-5xl text-greeny font-poppins">
                Daftar Akun
            </h1>
            <p class="text-bold opacity-70 ">
                Sudah punya akun? <a href="/" class="font-bold underline  hover:text-green-500">Klik disini</a>
            </p>

            <form action="{{ route('register.store') }}" method="POST" class="flex flex-col justify-center items-center">
                @csrf
                <div class="mt-8 w-full  flex justify-content-center justify-center items-center">
                    {{-- <label for="username" class="">Username</label><br> --}}
                    <input type="text" name="username" value=""
                        class=" font-poppins focus:outline-none text-greeny border-4 border-green-400 font-bold rounded-xl h-10 w-96 focus transition delay-200 font-weight-bold focus:ring-green-600 text-green-500"
                        placeholder="Username">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6  ml-1 bg-white text-greeny border-greeny rounded-2xl" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <div class="mt-3 w-full mt-4  flex justify-content-center justify-center items-center">
                    {{-- <label for="email">Email</label><br> --}}
                    <input type="email" name="email" value=""
                        class="font-poppins border-4 focus:outline-none text-greeny border-green-400 rounded-xl h-10 w-96 font-bold"
                        placeholder="Email">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6  ml-1 bg-white text-greeny border-greeny rounded-2xl" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </div>
                <div class="mt-3 w-full mt-4 flex justify-content-center justify-center items-center">
                    {{-- <label for="email">Password</label><br> --}}
                    <input type="password" name="password" value=""
                        class=" font-poppins border-4 focus:outline-none border-green-400 rounded-xl h-10 w-96 font-bold"
                        placeholder="Password">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 ml-1 bg-white text-greeny border-greeny rounded-2xl" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <div class="mt-3 w-full mt-4 flex justify-content-center justify-center items-center">
                    {{-- <label for="email">Password Confirmation</label><br> --}}
                    <input type="text" name="nama" value=""
                        class="font-poppins border-4 focus:outline-none text-greeny border-green-400 rounded-xl h-10 w-96 font-bold"
                        placeholder="nama">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 ml-1 bg-white text-greeny border-greeny rounded-2xl" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <div class="mt-8 w-full  flex justify-content-center justify-center items-center">
                    {{-- <label for="username" class="">Username</label><br> --}}
                    <input type="text" name="sekolah" value=""
                        class=" font-poppins border-4 focus:outline-none border-green-400 font-bold rounded-xl h-10 w-96 focus transition delay-200 font-weight-bold focus:ring-green-600 text-green-500"
                        placeholder="Sekolah">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6  ml-1 bg-white text-greeny border-greeny rounded-2xl" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
                <div class="mt-8 w-full  flex justify-content-center justify-center items-center">
                    {{-- <label for="username" class="">Username</label><br> --}}
                    <input type="text" name="kota" value=""
                        class=" font-poppins border-4 focus:outline-none border-green-400 font-bold rounded-xl h-10 w-96 focus transition delay-200 font-weight-bold focus:ring-green-600 text-green-500"
                        placeholder="Kota">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6  ml-1 bg-white text-greeny border-greeny rounded-2xl" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <div class="mt-8 w-full  flex justify-content-center justify-center items-center">
                    {{-- <label for="username" class="">Username</label><br> --}}
                    <input type="text" name="birthyear" value=""
                        class=" font-poppins border-4 focus:outline-none border-green-400 font-bold rounded-xl h-10 w-96 focus transition delay-200 font-weight-bold focus:ring-green-600 text-green-500"
                        placeholder="Tahun lahir">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6  ml-1 bg-white text-greeny border-greeny rounded-2xl" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>



                <div class="mt-8 w-60 flex justify-content-center  items-center ">
                    @if ($errors->any())
                    <div role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 rounded-lg">
                            Perhatian!
                        </div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <div
                                    class="border rounded-lg  border-red-400 rounded-b mt-3 bg-red-100 px-4 py-3 text-red-700">
                                    <li>
                                        {{ $error }}
                                    </li>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>



                <div class="mt-8 w-100 mb-8 mt-4 flex flex-column justify-center">
                    <button
                        class=" font-poppins font-semibold bg-greeny w-72 h-12 text-2xl border-2 rounded-2xl text-white  active:bg-green-700 hover:bg-green-400 transition delay-50"
                        type="submit">
                        Daftar
                    </button>
                </div>




            </form>

        </div>

    </div>
    <div
        class="lg:bg-greeny lg:flex lg:min-h-screen  lg:flex lg:justify-center lg:flex-col lg:items-center lg:w-4/12 // md:bg-greeny md:flex md:min-h-screen  md:flex md:justify-center md:flex-col md:items-center md:w-screen // sm:bg-greeny sm:flex sm:min-h-screen  sm:flex sm:justify-center sm:flex-col sm:items-center sm:w-screen // mini:bg-greeny mini:flex mini:min-h-screen  mini:flex mini:justify-center mini:flex-col mini:items-center mini:w-screen">

        <img src="{{ asset('image/BioUp! Logo.png') }}" alt="" class="w-80 h-80 ">
        <h1 class="lg:text-2xl text-center font-poppins font-semibold text-white // mini:text-xl mini:p-5">
            Biologi Kelas
            <p class="text-black">
                XII
            </p>
        </h1>
    </div>

</div>
