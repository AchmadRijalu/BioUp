<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <button class="bg-yellow-400 w-32 h-24 showModal">
        Pop Up
    </button>



    {{-- <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-screen" id="my-modal">


    </div> --}}
    <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded shadow-lg w-1/3">
            <div class="border-b px-4 py-2 flex flex-col justify-center items-center">
                <img src="{{asset('image/gameover.png')}}" alt="" class="w-24 h-24">
                <h3 class="text-black font-poppins text-2xl font-bold">
                    Game Over
                </h3>
            </div>
            <div class="p-3 flex flex-row justify-center font-poppins items-center font-semibold">
                Tetap Semangat!! Ayok bisa yok!
            </div>
            <div class="flex justify-center items-center w-100 border-t p-3 mt-2">
                <button class="bg-greeny hover:bg-greenySecond px-3 py-1 rounded text-white mr-1 animate-bounce font-poppins">
                    Coba Lagi
                </button>
            </div>
        </div>
    </div>

</body>


<script src="{{asset('script/modal.js')}}">

</script>
</html>
