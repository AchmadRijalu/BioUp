@extends('layout.main')

@section('title', 'Pilih Level')

@section('content')


    <div class="w-full flex flex-col bg-red-400 h-screen">


        <div
            class="bg-greenySecond font-poppins sm:justify-start mini:justify-center w-full sm:h-32 mini:h-40 flex flex-row bg-black">
            <div
                class=" sm:flex sm:flex-row mini:flex mini:flex-col mini:justify-center mini-items-center sm:justify-between items-center  text-white min-h-full text-3xl  w-full  ">

                <div class="flex flex-row sm:w-52  sm:h-full mini:w-52 mini:h-1/3 items-center  mini:justify-center ">
                    <img src="/{{ $char->charimgpath }}" alt="" class="sm:w-32 sm:h-32 mini:w-36 mini:h-36">
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

            @foreach ($levelchar as $levelsloop)
                <form action="{{ route('level.show', $levelsloop->level_id) }}" method="GET">
                    <button
                        class="w-levelbutton shadow-xl h-minimobileheight drop-shadow-lg text-xl bg-white text-black rounded-lg mt-7 font-poppins font-medium hover:bg-second transition delay-50 duration-300 ease-in-out
         "
                        type="submit">
                        @if ($loop->index == 0)
                            Mudah
                        @elseif($loop->index == 1 )
                            Sedang
                        @elseif($loop->index == 2 )
                            Sulit
                        @elseif($levelsloop->id == 16 )
                            Final
                        @endif

                    </button>
                </form>


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
