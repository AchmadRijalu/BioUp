@extends('layout.main')

@section('title', 'Pilih Level')

@section('content')


    <div class="w-full flex flex-col bg-red-400 h-screen">


        <div
            class="bg-greenySecond font-poppins sm:justify-start mini:justify-center w-full sm:h-32 mini:h-40 flex flex-row bg-black">
            <div
                class=" sm:flex sm:flex-row mini:flex mini:flex-col mini:justify-center mini-items-center sm:justify-between items-center  text-white min-h-full text-3xl  w-full  ">

                <div class="flex flex-row sm:w-52  sm:h-full mini:w-52 mini:h-1/3 items-center  mini:justify-center ">
                    <img src="{{ $char->charimgpath }}" alt="" class="sm:w-32 sm:h-32 mini:w-36 mini:h-36">
                    <h1 class=" font-bold">
                        {{ $char->nama }}
                    </h1>

                </div>

            </div>
        </div>
        <div class="bg-greenySecond w-full h-full flex flex-col justify-center items-center">


            <h1 class="text-white font-poppins font-semibold text-5xl mb-7 ">
                Pilih Level
            </h1>

            @foreach ($char->levels as $levelsloop)
                <button
                    class="w-levelbutton shadow-xl h-minimobileheight drop-shadow-lg text-xl bg-white text-black rounded-lg mt-7 font-poppins font-medium hover:bg-second transition delay-50 duration-300 ease-in-out
             "
                    onclick="location.href='/presoal'">
                    @if ($levelsloop->id == 1 )
                        Mudah
                    @elseif($levelsloop->id == 2 )
                    Sedang
                    @elseif($levelsloop->id == 3 )
                    Sulit
                    @elseif($levelsloop->id == 4 )
                    Mudah
                    @elseif($levelsloop->id == 5 )
                    Sedang
                    @elseif($levelsloop->id == 6 )
                    Sulit
                    @elseif($levelsloop->id == 7 )
                    Mudah
                    @elseif($levelsloop->id == 8 )
                    Sedang
                    @elseif($levelsloop->id == 9 )
                    Sulit
                    @elseif($levelsloop->id == 10 )
                    Mudah
                    @elseif($levelsloop->id == 11 )
                    Sedang
                    @elseif($levelsloop->id == 12 )
                    Sulit
                    @elseif($levelsloop->id == 13 )
                    Mudah
                    @elseif($levelsloop->id == 14 )
                    Sedang
                    @elseif($levelsloop->id == 15 )
                    Sulit
                    @elseif($levelsloop->id == 16 )
                    Final


                    @endif

                </button>
            @endforeach

            {{-- <button
                class="w-levelbutton h-minimobileheight shadow-xl drop-shadow-lg text-xl bg-white text-black mt-10 rounded-lg font-poppins font-medium hover:bg-second transition delay-50 duration-300 ease-in-out
                ">
                Sedang
            </button>
            <button
                class="w-levelbutton h-minimobileheight shadow-xl drop-shadow-lg text-xl bg-white text-black mt-10 mb-10 rounded-lg font-poppins font-medium hover:bg-second transition delay-50 duration-300 ease-in-out">
                Sulit
            </button> --}}


        </div>
    </div>

@endsection
