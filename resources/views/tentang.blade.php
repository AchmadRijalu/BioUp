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
        <div class="w-full  bg-white rounded-2xl flex flex-col mb-5">
            <div class="w-full  py-2 px-4 font-poppins">
                <h1 class="text-black font-bold text-2xl">
                    Tim Kami
                </h1>
            </div>
            <div class="w-full h-full  px-3 py-0 font-poppins font-medium">

                <h1 class="mb-7 text-xl">
                    Bio Up! Adalah Game Edukasi yang bertujuan untuk melatih kemampuan Pelajaran Biologi anak-anak
                    Sekolah Menengah Atas khususnya untuk Kelas 12/3 SMA. Game ini merupakan project akhir kami pada
                    Semester 3 Prodi Teknik Informatika Universitas Ciputra Surabaya.
                </h1>

            </div>
        </div>

    </div>
@endsection
