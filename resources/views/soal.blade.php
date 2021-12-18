<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bermain!</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div class="bg-greenySecond w-full min-h-screen flex flex-col items-center p-4">
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
                    X <span class="bg-green-400 rounded-md p-1">3</span> Health
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
                         text-2xl font-medium font-poppins focus:outline-none focus:shadow-outline focus:border-blue-300">
        </div>
        <div class=" mt-5 p-4 ">
            <button
                class="bg-green-700 tombol w-48 h-12 text-2xl border-2 drop-shadow-2xl  rounded-3xl text-white font-bold active:bg-green-700 hover:bg-green-600 transition delay-50 font-poppins  flex justify-content-center justify-center items-center
                        "
                id="pressed">
                Konfirm

            </button>
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
    var soalobject = @json($getsoal);
    let counter = 0;
    const nomer = document.getElementById("nomer");
    const pertanyaan = document.getElementById("pertanyaan");
    const jawaban = document.getElementById("jawaban");
    const gambarsoal = document.getElementById("gambarsoal");
    const pressed = document.getElementById("pressed");
    const jawabanasli = document.getElementById("jawabanasli");

    let currentindex;
    debug();

    function debug() {

        nomer.innerText = "Nomer : " + (counter+1);
        currentindex = soalobject[counter];
        if(currentindex.imgpath){
            gambarsoal.classList.remove('hidden');
            gambarsoal.src = "http://bioup.test/" + currentindex.imgpath;
        } else if(!currentindex.imgpath) {
            gambarsoal.classList.add('hidden');
        }
        pertanyaan.innerText = currentindex.pertanyaan;
        jawaban.value = "";

    };

    pressed.addEventListener('click', function() {

        if (!jawaban.value) {
            alert("jawaban tidak boleh kosong");
        } else if (jawaban.value) {
            const check = jawaban.value.replace(/\s+/g,'').toLowerCase();
            if (check == (currentindex.jawaban.replace(/\s+/g,'').toLowerCase())) {
                counter++
                if (counter < soalobject.length) {
                    // jawaban.value = "";
                    debug();
                } else {
                    alert("INDEX HABIS!");
                }
            } else {
                counter++
                if (counter < soalobject.length) {
                    wrongmodal.classList.remove('hidden');
                    jawabanasli.innerText = "Jawaban : " +currentindex.jawaban;
                    debug();
                } else {
                    alert("INDEX HABIS!");
                }
            }
        }

        // if (!jawaban.value) {
        //     alert("jawaban tidak boleh kosong");

        // } else if (jawaban.value = currentindex.jawaban) {
        //     counter++;
        //     if (counter < soalobject.length) {
        //         debug();
        //     } else {
        //         alert("INDEX HABIS");
        //     };
        // } else {
        //     alert("Jawaban salah");
        // }

    });
    // function pressed() {
    //
</script>


</html>
