@extends('layout.main')

@section('title', 'Pilih Level')
@section('content')

    <div
        class="bg-greenySecond font-poppins sm:justify-start mini:justify-center w-full sm:h-32 mini:h-40 flex flex-row bg-black">
        <div
            class=" sm:flex sm:flex-row mini:flex mini:flex-col mini:justify-center mini-items-center sm:justify-between items-center  text-white min-h-full text-3xl  w-full  ">

            <div class="flex flex-row sm:w-52  sm:h-full mini:w-52 mini:h-1/3 items-center  mini:justify-center ">
                <img src="{{ $char->charimgpath }}" alt="" class="sm:w-32 sm:h-32 mini:w-24 mini:h-24">
                <h1 class=" font-bold">
                    {{ $char->nama }}
                </h1>

            </div>
            <div class="mini:mt-5 sm:mt-0 mini:flex mini:flex-row mini:items-center sm:h-full sm:mr-5">
                @foreach ( $presoalscore as $scorevalue )
                <h1 class="font-bold text-center text-4xl">
                   Nilai : {{$scorevalue->score}}
               </h1>
                @endforeach

            </div>
        </div>
    </div>
    <div class="bg-greenySecond w-full h-screen flex flex-col">
        <div class=" w-full h-16 text-3xl flex flex-row justify-center items-center">
            <h1 class="text-white font-poppins font-bold text-4xl">
                Level : @if ($presoal->id % 3 == 1)
                    Mudah
                @elseif ($presoal->id %3 ==2)
                    Sedang
                @elseif ($presoal->id %3 == 0)
                    Sulit
                @elseif ($presoal->id == 16)
                    Final
                @endif


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
                             @if ($char->id == 1)
                             Pertumbuhan dan Perkembangan
                             @elseif ($char->id == 2)
                             Metabolisme
                             @elseif ($char->id == 3)
                             Hereditas
                             @elseif ($char->id == 4)
                             Teori Evolusi
                             @elseif ($char->id == 5)
                             Bioteknologi
                             @elseif ($char->id == 6)
                             Ujian Akhir
                            @endif
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
                            {{ $presoal->soals->count() }}
                        </h1>
                    </div>
                </div>

            </div>
            <div class="w-full flex flex-row justify-center mt-7">
                <button
                    class="soalbuttonconfirmation bg-green-500 animate-bounce mt-4 w-48 h-12 text-2xl border-2 drop-shadow-2xl  rounded-2xl text-white font-bold active:bg-green-700 hover:bg-green-400 transition delay-50 font-poppins  flex justify-content-center justify-center items-center"
                    onclick="location.href='{{ route('soal.show',$presoal->id) }}'">

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
    {{-- <div
        class="soalmodalconfirmation  mini:h-screen mini:w-full fixed left-0 top-0 mini:flex mini:justify-center mini:items-center bg-black bg-opacity-75 mini:hidden">
        <div class="bg-greenySecond rounded shadow-lg  mini:w-max mini:h-max">
            <div class=" mini:px-5 mini:py-5 flex flex-col justify-center items-center ">
                <img src="{{ asset('image/BioUp! Logo (Transparent).png') }}" alt="" class="w-24 h-24">
                <h3 class="text-white font-poppins md:text-2xl mini:text-lg font-bold">
                    Apakah yakin untuk memulai?
                </h3>
            </div>

            <div class="flex justify-center items-center w-100  p-3 mt-2">
                <button
                    class="bg-green-500 hover:bg-blue-700 px-3 py-1 rounded text-white mr-1  font-poppins removewrongmodal" onclick="location.href='{{route('soal.index')}}'">
                    mulai
                </button>

            </div>
        </div>
    </div> --}}

    {{-- <script src="{{ asset('script/confirmation.js') }}">

    </script> --}}
@endsection
