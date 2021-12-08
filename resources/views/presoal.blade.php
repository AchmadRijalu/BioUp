@extends('layout.main')

@section('title', 'Pilih Level')
@section('content')

    <div
        class="bg-greenySecond font-poppins sm:justify-start mini:justify-center w-full sm:h-32 mini:h-40 flex flex-row bg-black">
        <div
            class=" sm:flex sm:flex-row mini:flex mini:flex-col mini:justify-center mini-items-center sm:justify-between items-center  text-white min-h-full text-3xl  w-full  ">

            <div class="flex flex-row sm:w-52  sm:h-full mini:w-52 mini:h-1/3 items-center  mini:justify-center ">
                <img src="{{ asset('image/Touki.svg') }}" alt="" class="sm:w-32 sm:h-32 mini:w-24 mini:h-24">
                <h1 class=" font-bold">
                    Touki
                </h1>

            </div>
            <div class="mini:mt-5 sm:mt-0 mini:flex mini:flex-row mini:items-center sm:h-full sm:mr-5">
                <h1 class="font-bold text-center text-4xl">
                    Skor : 100
                </h1>
            </div>
        </div>
    </div>
    <div class="bg-greenySecond w-full h-screen flex flex-col">
        <div class=" w-full h-16 text-3xl flex flex-row justify-center items-center">
            <h1 class="text-white font-poppins font-bold text-4xl">
                Level : Mudah
            </h1>
        </div>
        <div class=" w-full h-custom1 p-5 ">

            <div
                class="bg-white rounded-3xl mini:w-full mini:h-full sm:flex sm:flex-row mini:flex mini:flex-col font-poppins">
                <div class=" flex flex-col m-auto items-center sm:w-1/2 sm:h-full mini:w-full mini:h-1/2 font-bold ">
                    <div class="w-full h-16 flex flex-row justify-center">
                        <h1 class="text-black text-3xl mt-4">
                            Materi
                        </h1>
                    </div>

                    <div class="w-full h-full  flex flex-col items-center">
                        <h1 class="text-black font-medium text-2xl sm:mt-24 mini:mt-12 text-center">
                            - Pertumbuhan dan Perkecambahan
                        </h1>
                    </div>

                </div>
                <div class="flex flex-col border-l-4 items-center sm:w-1/2 sm:h-full mini:w-full mini:h-1/2 font-bold ">
                    <div class="w-full h-16 flex flex-row justify-center">
                        <h1 class="text-black text-3xl mt-4">
                            Jumlah Soal
                        </h1>
                    </div>
                    <div class="w-full h-full  flex flex-col items-center">
                        <h1 class="text-black font-medium text-7xl sm:mt-24 mini:mt-12">
                            20
                        </h1>
                    </div>
                </div>

            </div>
            <div class="w-full flex flex-row justify-center mt-7">
                <button
                    class="bg-green-500 animate-bounce mt-4 w-48 h-12 text-2xl border-2 drop-shadow-2xl  rounded-2xl text-white font-bold active:bg-green-700 hover:bg-green-400 transition delay-50 font-poppins  flex justify-content-center justify-center items-center"
                    onclick="location.href='/soal'">
                    Mulai
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                    </svg>
                </button>
            </div>
        </div>

    </div>


@endsection
