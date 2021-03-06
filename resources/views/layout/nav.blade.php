{{-- <aside class="bg-white flex justify-between w-44 h-screen flex-col ">

    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
<h1 class="bg-black">
    Ini
</h1>
</aside> --}}


{{-- <aside class="bg-white flex justify-between w-full h-16 flex-row fixed "> --}}


{{--  --}}

<div class="bg-greeny text-gray-100 flex justify-between md:hidden">
    <!-- logo -->
    {{-- <a href="#" class="block p-4 text-white font-bold">BIO Up</a> --}}
    <img src="{{ asset('image/BioUp! Logo (Transparent).png') }}" alt="" class="w-16 h-16 animate-pulse">

    <!-- mobile menu button -->
    <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700 mr-4">
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
</div>

<!-- sidebar -->

<div
    class="sidebar bg-greeny flex flex-col items-center text-blue-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
    {{-- min-h-full --}}
    <!-- logo -->
    <a href="#" class="text-white flex flex-col items-center space-x-2 px-4 ">
        {{-- <svg class="w-8 h-8 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
        </svg> --}}
        <img src="{{ asset('image/BioUp! Logo (Transparent).png') }}" alt=""
            class="w-24 h-24 rounded-full animate-fasterpulse">
        {{-- <span class="text-2xl font-extrabold">Bio UP!</span> --}}
    </a>

    <!-- nav -->
    <nav class="w-full">

        <div class="">
            <a href="{{ route('character.index') }}"
                class="block font-bold text-xl flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-white  hover:text-greeny">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Bermain
            </a>
            <a href="{{ route('papan.index') }}"
                class="block py-2.5 px-4 mt-3 font-bold text-xl flex items-center rounded transition duration-200 hover:bg-white  hover:text-greeny">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1 " fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>
                Papan Skor
            </a>
            <a href="/tentang"
                class="block py-2.5 px-4 mt-3 font-bold text-xl flex items-center rounded transition duration-200 hover:bg-white  hover:text-greeny">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1 " fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Tentang Bio Up!
            </a>
        </div>

        <div class="mt-10 bg-white  flex flex-col w-full rounded-md cursor-default">
            @auth
                <div class="flex flex-row justify-start items-center">
                    <div class=" border-r-2 w-4/5">
                        <p class="block  py-2.5 px-4 font-bold text-xl flex flex-row items-center justify-start rounded text-greeny">
                            <svg class="h-5 w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                                Halo {{ auth()->user()->name }} !


                        </p>
                    </div>
                    <div class="w-1/5  flex flex-row justify-center cursor-pointer animate-ping" id="drop">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-greenySecond" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>

                </div>
                <div class="flex flex-row  bg-white py-2.5 px-4 border-t-2 rounded-b-lg w-full h-full hidden" id="logout">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit"
                            class="items-center flex text-white font-poppins font-semibold bg-greeny hover:bg-red-500 hover:text-white transition delay-75 rounded-lg p-2 w-full h-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                              </svg>
                            Logout
                        </button>
                    </form>
                </div>

            @endauth
        </div>



        {{-- <a href="" class="block py-2.5 px-4 font-bold text-xl flex items-center rounded transition duration-200 hover:bg-white hover:text-white">
            Pricing
        </a> --}}
    </nav>
</div>

<script src="{{asset('script/drop.js')}}"></script>
