<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bermain!</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    @csrf
    <div class="bg-greenySecond w-full h-screen flex flex-col items-center">
        <div class="w-full sm:h-3/4 mini:h-screen flex flex-col items-center p-4 bg-greenySecond">
            <div
                class="w-full sm:h-20 bg-greenySecond sm:flex sm:flex-row mini:flex mini:flex-col-reverse mini:justify-center sm:justify-between mini:items-center sm:p-3">
                <div class=" h-full flex flex-row items-center sm:ml-3 ">
                    <button
                        class="showModal bg-red-700  w-48 h-12 text-2xl border-2 drop-shadow-2xl  rounded-3xl text-white font-bold active:bg-green-700 hover:bg-red-600 transition delay-50 font-poppins  flex justify-content-center justify-center items-center
                    ">
                        Keluar

                    </button>

                </div>
                <div
                    class="h-full mini:mt-4  sm:mt-0 mini:mb-5 sm:m-0 flex flex-row items-center sm:mr-3 bg-white w-48 justify-center rounded-2xl">
                    <img src="{{ asset('image/potion.svg') }}" alt="" class="w-12 h-12">
                    <p class="text-black font-poppins text-xl font-medium">
                        X <span class="bg-green-400 rounded-md p-1" id="healthspan"></span> Health
                    </p>
                </div>
            </div>

            <div class="bg-white w-full p-3  mt-8 flex flex-col items-center rounded-2xl mb-11">
                <div class="w-full h-12  font-poppins">
                    <h1 class="text-black text-4xl font-bold ml-10 shadow-sm w-max" id="nomer">
                        Nomer :
                    </h1>
                </div>

                <img src="" alt="" class="w-96 h-80 hidden" id="gambarsoal">

                <div class="w-full bg-white p-7 font-poppins text-2xl font-medium rounded-2xl mt-7">
                    <p id="pertanyaan">
                        pertanyaan

                    </p>

                </div>

            </div>
            {{-- ISI JAWABAN --}}
            <div class="bg-white w-3/4 h-12 p-3  mt-2 flex flex-row items-center rounded-2xl ">
                <input type="text" name="jawaban" id="jawaban" value="" placeholder="Jawab Disini" autocomplete="off"
                    class="  w-full
                         text-2xl font-medium font-poppins focus:outline-none focus:shadow-outline focus:border-blue-300"
                    autofocus>
            </div>
            <div class=" mt-5 p-4 ">
                <button
                    class="bg-green-700 tombol w-48 h-12 text-2xl border-2 drop-shadow-2xl  rounded-3xl text-white font-bold active:bg-green-700 hover:bg-green-600 transition delay-50 font-poppins  flex justify-content-center justify-center items-center
                        "
                    id="pressed">
                    Konfirm

                </button>
                {{-- <button class="bg-yellow-400 w-32 h-12 showGameOverModal">
                Pop Up
            </button> --}}
            </div>
        </div>

        <div class="w-full sm:h-1/4 sm:mt-20 mini:h-screen  bg-greenySecond flex flex-col p-4 justify-end">
            <div class="flex flex-row">
                <svg xmlns="http://www.w3.org/2000/svg" class="musicon h-12 w-12 mb-2 text-white animate-ping"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />

                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="musicoff h-12 w-12 mb-2 text-white hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"
                        clip-rule="evenodd" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" />
                </svg>
                <button type="button" id="buttonvalue"
                    class="buttonMusic text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2 ml-2 dark:focus:ring-yellow-900 font-poppins">
                    Musik Nyala
                </button>
                <audio autoplay loop class="play">
                    <source src="{{ asset('audio/ingameBG.mp3') }}">
                </audio>

            </div>
        </div>
    </div>


    {{-- ini adalah modal --}}

    <div
        class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
        <div class="bg-greenySecond rounded shadow-lg w-1/3">
            <div class=" px-4 py-2 flex flex-col justify-center items-center">
                <img src="{{ asset('image/BioUp! Logo (Transparent).png') }}" alt="" class="w-24 h-24">
                <h3 class="text-white font-poppins text-3xl font-bold">
                    Mau Kembali?
                </h3>
            </div>
            <div class="p-3 flex flex-row justify-center font-poppins items-center font-semibold text-white mt-2">
                Semua jawaban tidak akan tersimpan loh.. :(
            </div>
            <div class="flex justify-end items-center w-100  p-3 mt-2">
                <button
                    class="bg-blue-500 hover:bg-blue-700 px-3 py-1 rounded text-white mr-1  font-poppins removeModal">
                    nggak jadi
                </button>
                <button class="bg-red-500 hover:bg-red-700 px-3 py-1 rounded text-white mr-1  font-poppins"
                    onclick="location.href='{{ route('character.index') }}'">
                    Keluar
                </button>
            </div>
        </div>
    </div>



    <div
        class="finishgamemodal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded shadow-lg w-1/3">
            <div class="border-b px-4 py-2 flex flex-col justify-center items-center">
                <img src="{{ asset('/image/check.png') }}" alt="" class="w-24 h-24">
                <h3 class="text-black font-poppins text-2xl font-bold">
                    Selamat! Kamu telah menyelesaikan Level ini!
                </h3>
            </div>
            <div class="p-3 flex flex-row justify-center font-poppins items-center font-semibold">
                <p id="nilai">Nilai : </p>
            </div>
            <div class="flex justify-center items-center w-100 border-t p-3 mt-2">
                <button
                    class="continuebutton bg-greeny hover:bg-greenySecond px-3 py-1 rounded text-white mr-1 animate-bounce font-poppins">
                    lanjut
                </button>
            </div>
        </div>
    </div>


    <div
        class="gameovermodal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded shadow-lg w-1/3">
            <div class="border-b px-4 py-2 flex flex-col justify-center items-center">
                <img src="{{ asset('/image/gameover.png') }}" alt="" class="w-24 h-24">
                <h3 class="text-black font-poppins text-2xl font-bold">
                    Game Over
                </h3>
            </div>
            <div class="p-3 flex flex-row justify-center font-poppins items-center font-semibold">
                Tetap Semangat!! Ayok bisa yok!
            </div>
            <div class="flex justify-center items-center w-100 border-t p-3 mt-2">
                <button
                    class="tryagain bg-greeny hover:bg-greenySecond px-3 py-1 rounded text-white mr-1 animate-bounce font-poppins">
                    Coba Lagi
                </button>
            </div>
        </div>
    </div>
    <div
        class="wrongmodal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
        <div class="bg-greenySecond rounded shadow-lg w-1/3">
            <div class=" px-4 py-2 flex flex-col justify-center items-center">
                <img src="{{ asset('image/BioUp! Logo (Transparent).png') }}" alt="" class="w-24 h-24">
                <h3 class="text-white font-poppins text-3xl font-bold">
                    Jawaban Anda Salah
                </h3>
            </div>
            <div class="p-3 flex flex-row justify-center font-poppins items-center font-semibold text-white mt-2">
                <p id="jawabanasli">Jawaban : </p>
            </div>
            <div class="flex justify-center items-center w-100  p-3 mt-2">
                <button
                    class="bg-green-500 hover:bg-blue-700 px-3 py-1 rounded text-white mr-1  font-poppins removewrongmodal">
                    OKE
                </button>

            </div>
        </div>
    </div>


</body>
<script src="{{ asset('script/modal.js') }}"></script>

<script>
    const healthspan = document.getElementById("healthspan");
    const nomer = document.getElementById("nomer");
    const pertanyaan = document.getElementById("pertanyaan");
    const jawaban = document.getElementById("jawaban");
    const gambarsoal = document.getElementById("gambarsoal");
    const pressed = document.getElementById("pressed");
    const jawabanasli = document.getElementById("jawabanasli");
    const nilai = document.getElementById("nilai");
    const tryagain = document.querySelector('.tryagain');
    var soalhealth = @json($gethealth->healthPoint);
    let charid = @json($level->character_id);
    let levelid = @json($level->id);
    let benarjawab = 0;
    let score = 0;
    let counter = 0;
    let healthcounter = soalhealth;
    let currentindex;
    var soalobject = @json($getsoal);

    debug();

    function debug() {

        healthspan.innerText = healthcounter;
        nomer.innerText = "Nomer : " + (counter + 1);
        currentindex = soalobject[counter];
        if (currentindex.imgpath) {
            gambarsoal.classList.remove('hidden');
            gambarsoal.src = "http://bioup.test/" + currentindex.imgpath;
        } else if (!currentindex.imgpath) {
            gambarsoal.classList.add('hidden');
        }
        pertanyaan.innerText = currentindex.pertanyaan;
        jawaban.value = "";


    };

    pressed.addEventListener('click', function() {

        if (!jawaban.value) {
            alert("jawaban tidak boleh kosong");
        } else if (jawaban.value) {
            const check = jawaban.value.replace(/\s+/g, '').toLowerCase();
            if (check == (currentindex.jawaban.replace(/\s+/g, '').toLowerCase())) {
                counter++;
                benarjawab++;
                if (counter < soalobject.length) {
                    // jawaban.value = "";
                    debug();
                } else {
                    finishgamemodal.classList.remove('hidden');
                    score = benarjawab * 5;
                    nilai.innerText = "Nilai : " + score;
                }
            } else {
                healthcounter--;
                counter++;
                if (counter < soalobject.length) {
                    if (healthcounter < 1) {
                        wrongmodal.classList.remove('hidden');
                        jawabanasli.innerText = "Jawaban : " + currentindex.jawaban;
                        gameovermodal.classList.remove('hidden');
                        score = benarjawab * 5;
                        debug();

                    } else {
                        wrongmodal.classList.remove('hidden');
                        jawabanasli.innerText = "Jawaban : " + currentindex.jawaban;
                        debug();
                    }

                } else {
                    finishgamemodal.classList.remove('hidden');
                    score = benarjawab * 5;
                    nilai.innerText = "Nilai : " + score;
                }
            }
        }
    });
    tryagain.addEventListener('click', function(e) {
        gameovermodal.classList.add('hidden');
        var _token = $("input[name='_token']").val();
        e.preventDefault();
        $.ajax({
            url: "{{ route('soal.store') }}",
            type: 'POST',
            data: {
                _token: _token,
                character_id: charid,
                level_id: levelid,
                updatescore: score,
            },
            success: function(response) {
                if (response.success) {
                    console.log("ajax working"); //Message come from controller
                } else {
                    alert("Error");
                }
            },
            error: function(error) {
                console.log(error)
            }
        });
        history.back();
    });
    continuebutton.addEventListener('click', function(e) {
        finishgamemodal.classList.add('hidden');
        var _token = $("input[name='_token']").val();
        e.preventDefault();
        $.ajax({
            url: "{{ route('soal.store') }}",
            type: 'POST',
            data: {
                _token: _token,
                character_id: charid,
                level_id: levelid,
                updatescore: score,
            },
            success: function(response) {
                if (response.success) {
                    console.log("ajax working"); //Message come from controller
                } else {
                    alert("Error");
                }
            },
            error: function(error) {
                console.log(error)
            }
        });
        window.location.href = "{{ route('character.index') }}";
    });
</script>


</html>
