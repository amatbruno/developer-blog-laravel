<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Dev Blog | Homepage</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            background: #111827;
        }

        #container-blur {
            background: #ffffff2d;
            backdrop-filter: blur(12px);
        }

        .mini-container {
            background: #111827
        }

        svg {
            stroke: white;
        }
    </style>
</head>

<body class="antialiased overflow-hidden">
    <main class="bg-red-800 h-[420px]">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h1 class="text-8xl text-white font-bold text-center">Developers Blog</h1>
            
        </div>
        <div id="container-blur" class="w-[1600px] h-[600px] m-auto mt-36 rounded-xl flex justify-center items-center gap-36">
            <div class="mini-container w-[350px] h-fit rounded-xl flex flex-col justify-center items-center p-5">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                class="" viewBox="0 0 64.000000 64.000000"
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)"
                fill="white" stroke="white">
                <path d="M20 320 l0 -260 260 0 260 0 0 96 c0 94 1 97 40 163 22 37 40 77 40
                88 0 29 -26 53 -56 53 -23 0 -24 3 -24 60 l0 60 -260 0 -260 0 0 -260z m498
                208 l3 -28 -240 0 -241 0 0 23 c0 13 3 27 7 31 4 3 110 5 237 4 l231 -3 3 -27z
                m2 -68 c0 -11 -21 -56 -46 -100 l-47 -80 -83 0 -84 0 0 -70 0 -70 59 0 c50 0
                59 -3 64 -20 3 -11 12 -20 21 -20 17 0 85 62 104 95 10 16 12 9 10 -45 l-3
                -65 -235 0 -235 0 -3 198 -2 197 240 0 c234 0 240 0 240 -20z"/>
                <path d="M80 380 l0 -60 70 0 70 0 0 60 0 60 -70 0 -70 0 0 -60z"/></g>
                </svg>
                <h1 class="text-white">Create your own post</h1>
                <button class="text-white">Know More</button>
            </div>
            
        </div>

    
    {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"> --}}
        {{-- @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif --}}

        
    </div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) | Made by Bruno Amat
            </div>
        </div>
    </main>
</body>

</html>