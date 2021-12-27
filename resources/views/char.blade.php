@extends('layout.main')

@section('content')

    <div class="bg-greenySecond font-poppins sm:justify-start mini:justify-center w-full h-20  flex flex-row">
        <div class="flex flex-col justify-center mr-10 text-white  w-4/5 min-h-full text-4xl ">
            <h1 class="ml-8 font-bold">
                Pilih Karakter
            </h1>
        </div>
    </div>

    <div class="bg-greenySecond flex flex-row justify-center   min-h-screen">

        <div class="h-full grid sm-grid-cols-1 gap-8 md:grid-cols-1 xl:grid-cols-2  mt-5">
            @php($count = 0)
            @foreach ($character as $charloop)
                @if ($charloop->users->where('id', Auth::id())->first() != null)
                    <div class="bg-white mt-3 cursor-pointer md:w-cardviewwidth2 md:h-cardviewheight2 // sm:w-minicardwidth sm:h-minicardheight // hover:bg-second transition delay-50 rounded-xl shadow-2xl flex flex-row"
                        onclick="location.href='{{route('character.show', $charloop->id)}}'">

                        <div class=" w-1/2 h-full flex flex-col">
                            <div class=" w-full h-1/2 px-5 py-3 font-poppins">
                                <h1 class="text-black text-2xl font-bold">
                                    {{ $charloop->nama }}
                                </h1>
                                <p class="text-black tex">

                                    @if ($charloop->nama == 'lass')
                                        Total Level : 1
                                    @else
                                        Total Level : 3
                                    @endif
                                </p>
                                <p>
                                    @if (count($userchar) > $count)
                                        Total Skor : {{ $userchar->first()->score }}
                                    @else
                                        <strong class="font-semibold text-red-500">Terkunci</strong>(Butuh {{ $charloop->reqscore }} skor)
                                    @endif
                                </p>
                            </div>
                            <div class=" justify-end w-full h-1/2 flex flex-col  font-poppins px-5 py-3">
                                <div class="w-full flex flex-row items-center">
                                    <img src="{{ asset('image/nyawa.svg') }}" alt="" class="w-8 h-8"> <span
                                        class="ml-2">x {{ $charloop->healthPoint }}</span>
                                </div>
                            </div>

                        </div>
                        <div class=" justify-end items-center w-1/2 h-full flex flex-row">
                            <img src="{{ $charloop->charimgpath }}" alt="" class=" drop-shadow-2xl w-52 h-52">
                        </div>
                    </div>
                @else
                    <div class="bg-gray-400 mt-3  md:w-cardviewwidth2 md:h-cardviewheight2 // sm:w-minicardwidth sm:h-minicardheight // transition delay-50 rounded-xl shadow-2xl flex flex-row cursor-not-allowed">

                        <div class=" w-1/2 h-full flex flex-col">
                            <div class=" w-full h-1/2 px-5 py-3 font-poppins">
                                <h1 class="text-black text-2xl font-bold">
                                    {{ $charloop->nama }}
                                </h1>
                                <p class="text-black tex">

                                    @if ($charloop->nama == 'lass')
                                        Total Level : 1
                                    @else
                                        Total Level : 3
                                    @endif
                                </p>
                                <p>
                                    @if (count($userchar) > $count)
                                        Total Skor : {{ $userchar[$count]->score }}
                                    @else
                                    <strong class="font-semibold text-red-500">Terkunci</strong> (Butuh {{ $charloop->reqscore }} skor)
                                    @endif
                                </p>
                            </div>
                            <div class=" justify-end w-full h-1/2 flex flex-col  font-poppins px-5 py-3">
                                <div class="w-full flex flex-row items-center">
                                    <img src="{{ asset('image/nyawa.svg') }}" alt="" class="w-8 h-8"> <span
                                        class="ml-2">x {{ $charloop->healthPoint }}</span>
                                </div>
                            </div>

                        </div>
                        <div class=" justify-end items-center w-1/2 h-full flex flex-row">
                            <img src="{{ $charloop->charimgpath }}" alt="" class=" drop-shadow-2xl w-52 h-52">
                        </div>
                    </div>
                @endif
                @php($count++)
            @endforeach
        </div>
    </div>
@endsection
