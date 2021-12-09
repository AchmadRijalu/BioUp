<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Pertumbuhan cepat di tempat gelap dinamakan....',
            'imgpath' => '',
            'jawaban' => 'etiolasi',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Perhatikan gambar batang dikotil berikut! Yang merupakan titik tumbuh sekunder pada gambar tersebut
            adalah nomor…. (Gunakan "dan" jika terdapat 2 jawaban)',
            'imgpath' => 'imageSoal/Soal 2.png',
            'jawaban' => '4',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Hormon pertumbuhan yang berfungsi mempengaruhi pematangan buah adalah...',
            'imgpath' => '',
            'jawaban' => 'etilen',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Bagian embrio yang akan tumbuh menjadi batang dinamakan....',
            'imgpath' => '',
            'jawaban' => 'plumula',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Dalam proses pertumbuhan dan perkembangan, tunas membengkok ke atas. Hal ini diakibatkan peran hormon….',
            'imgpath' => '',
            'jawaban' => 'auxin',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Daerah pertumbuhan yang sel-selnya berubah menjadi sel-sel dengan tipe yang khusus adalah daerah …… sel',
            'imgpath' => '',
            'jawaban' => 'diferensiasi',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Tunas yang tumbuh membelok ke arah datangnya cahaya karena pengaruh kerja dari hormon .....',
            'imgpath' => '',
            'jawaban' => 'auksin',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Hormon yang dapat memacu pertumbuhan dapat mengakibatkan pertumbuhan raksasa pada tumbuhan adalah ...',
            'imgpath' => '',
            'jawaban' => 'Giberelin',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Gejala klorosis pada tumbuhan dapat dihindarkan jika tanah tempat tumbuhnya tanaman diberi pupuk mengandung... (Gunakan "dan" jika terdapat 2 jawaban)',
            'imgpath' => '',
            'jawaban' => 'fe dan mg',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Pertumbuhan memanjang pada ujung-ujung tumbuhan disebut Pertumbuhan ...',
            'imgpath' => 'imageSoal/Soal 4.jpg',
            'jawaban' => 'primer',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Dari gambar tersebut bagian nomor 1 dan 4 sesuai keterangan gambarnya adalah….. (Gunakan "dan" jika terdapat 2 jawaban)',
            'imgpath' => 'imageSoal/Soal 3.png',
            'jawaban' => 'embrio dan kotiledon',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Dibawah ini faktor-faktor eksternal yang mempengaruhi pertumbuhan, kecuali ..... (Gunakan "dan" jika terdapat 2 jawaban)',
            'imgpath' => '',
            'jawaban' => 'gen dan hormon',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Selama musim kemarau panjang pohon jati dan pohon kedongdong menggugurkan daunnya hal ini disebabkan terkonsentrasinya hormon pada bagian uncup untuk menghambat pembelahan sel. Hormon yang dimaksud adalah',
            'imgpath' => '',
            'jawaban' => 'absisat',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Bagian tumbuhan yang berfungsi sebagia pelindung dari benturan fisik ujung akar yaitu ….',
            'imgpath' => '',
            'jawaban' => 'Kaliptra',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Teknik menanam tumbuhan dengan media air disebut ….',
            'imgpath' => '',
            'jawaban' => 'hidroponik',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Zat pada tumbuhan yang bersifat menghambat pertumbuhan disebut ….',
            'imgpath' => '',
            'jawaban' => 'inhibitor',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Berikut yang bukan kelompok hormon pemacu pertumbuhan tumbuhan ialah…',
            'imgpath' => '',
            'jawaban' => 'ABA',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Pada suatu percobaan menggunakan benih tanaman padi yang dihilangkan akar utamanya. Namun, kemudian tumbuh akar – akar liar yang menggantikan akar tumbuhan tersebut. Jaringan apakah yang berperan dalam pembentukan akar liar??',
            'imgpath' => '',
            'jawaban' => 'endodermis',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'Pisang adalah buah yang digemari di Indonesia, namun demikian pisang mudah matang dan cepat menjadi busuk. Jika ingin pisang tidak cepat matang maka hormone yang harus dikendalikan adalah...',
            'imgpath' => '',
            'jawaban' => 'etilen',
        ]);
        DB::table('bio12_soals')->insert([
            'pertanyaan' => 'jaringan pengangkut pada tumbuhan berpembulu ( tracheophyta) yang berfungsi dalam transportasi hasil fotosintetis, terutama gula sukrosa, dan berbagai netabolit lainnya dari daun menuju bagian bagian tumbuhan lainnya ',
            'imgpath' => '',
            'jawaban' => 'floem',
        ]);


    }
}
