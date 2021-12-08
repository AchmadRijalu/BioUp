<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>


<body>

    <div class=" min-h-screen relative md:flex">

        @include('layout.nav')

        <div class="flex-1 flex-col">
            @yield('content')
            <div class="w-full bg-greenySecond ">
                <img src="{{ asset('image/Vector.png') }}" alt="">
            </div>
        </div>
        <audio autoplay loop preload="@section('content')" id="my_audio">
            <source src="{{asset('audio/harvest.mp3')}}">
        </audio>
        <audio autoplay id="my_audio">
            <source src="{{asset('audio/clickedSound.mp3')}}">
        </audio>
    </div>


</body>
<script src="{{ asset('script/script.js') }}">

</script>

</html>
