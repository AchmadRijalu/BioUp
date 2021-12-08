@extends('layout.main')


@section('title', 'Tentang About Bio Up!')


@section('content')

    <div class="w-full h-24 bg-greenySecond">

        <div class="w-full h-full  flex flex-col  justify-center ">
            <h1 class="text-white text-3xl font-bold ml-6">
                Tentang Bio Up!
            </h1>
        </div>
    </div>

    <div class="w-full min-h-screen bg-greenySecond flex flex-col px-5 py-5">

        <div class="w-full  bg-white rounded-2xl flex flex-col mb-5">
            <div class="w-full  py-2 px-4 font-poppins">
                <h1 class="text-black font-bold text-2xl">
                    Apa itu Bio Up?
                </h1>
            </div>
            <div class="w-full h-full  px-3 py-0 font-poppins font-medium">

                <h1 class="mb-9 text-xl">
                    Bio Up! Adalah Game Edukasi yang bertujuan untuk melatih kemampuan Pelajaran Biologi anak-anak
                    Sekolah Menengah Atas khususnya untuk Kelas 12/3 SMA. Game ini merupakan project akhir kami pada
                    Semester 3 Prodi Teknik Informatika Universitas Ciputra Surabaya.
                </h1>

            </div>
        </div>
        <div class="w-full  bg-white rounded-2xl flex flex-col mb-5">
            <div class="w-full  py-2 px-4 font-poppins">
                <h1 class="text-black font-bold text-2xl">
                    Cara Bermain
                </h1>
            </div>
            <div class="w-full h-full  px-3 py-0 font-poppins font-medium">

                <h1 class="mb-7 text-xl">
                    Game ini memiliki fitur pemilihan karakter yang mempunyai jumlah berdasarkan
                    jumlah Bab Mata Pelajaran Biologi Kelas 12/3 SMA. Tiap Karakter memiliki nyawa yang berbeda-beda
                    dan juga terdapat level pada tiap karakter. Untuk membuka karakter selanjutnya pemain harus memenuhi
                    syarat dari ketentuan dari
                    karakter tersebut.
                </h1>
                <h2 class="mb-7 text-xl">
                    Tipe soal yang terkandung pada tiap karakter dan level merupakan uraian/isian.
                    Pemain cukup mengetikkan jawaban yang benar sesuai soal yang didapat. Jika tidak sesuai dengan
                    jawaban/salah, maka health karakter yang digunakan pemain akan berkurang 1, dan jika nyawa karakter
                    pemain menyentuh
                    angka 0 maka pemain akan game over.
                </h2>

            </div>
        </div>
        <div class="w-full  bg-white rounded-2xl flex flex-col mb-5 items-center">
            <div class="w-full  py-2 px-4 font-poppins mini:mb-5">
                <h1 class="text-black font-bold text-2xl">
                    Tim Kami
                </h1>
            </div>
            <div class=" h-full w-full  px-3 py-0 font-poppins  font-medium sm:flex sm:flex-row sm:justify-center sm:items-center mb-7 lg:space-x-9 md:space-x-12 sm:space-x-20 sm:p-4">

                <div class="flex flex-col items-center justify-center mini:mb-6">
                    <img src="{{asset('imageAboutUs/rafi.jpg')}}" alt="" class="2xl:w-48 2xl:h-48 lg:w-36 lg:h-36 rounded-full mini:w-32 mini:h-32 mini:mb-1">
                    <p class="2xl:mt-4">
                        Mahadi Rafi Winata
                    </p>
                </div>

                <div class="flex flex-col items-center justify-center mini:mb-6">
                    <img src="{{asset('imageAboutUs/jalu.jpg')}}" alt="" class="2xl:w-48 2xl:h-48 lg:w-36 lg:h-36 rounded-full mini:w-32 mini:h-32 mini:mb-1">
                    <p class="2xl:mt-4 ">
                       Achmad Rijalu A
                    </p>
                </div>

                <div class="flex flex-col items-center justify-center mini:mb-6">
                    <img src="{{asset('imageAboutUs/alvin.jpg')}}" alt="" class="2xl:w-48 2xl:h-48 lg:w-36 lg:h-36 rounded-full mini:w-32 mini:h-32 mini:mb-1">
                    <p class="2xl:mt-4 ">
                        Alvin Gary
                     </p>
                </div>

                <div class="flex flex-col items-center justify-center mini:mb-6">
                    <img src="{{asset('imageAboutUs/syamsuddin.png')}}" alt="" class="2xl:w-48 2xl:h-48 lg:w-36 lg:h-36 rounded-full mini:w-32 mini:h-32 mini:mb-1">
                    <p class="2xl:mt-4">
                       Syamsuddin Putra R
                     </p>
                </div>



            </div>
        </div>

    </div>
@endsection
