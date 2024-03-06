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
            background: #d6d6d62d;
            backdrop-filter: blur(18px);
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
            <p class="text-white text-3xl text-center mt-16">Discover. Inspire. Thrive.</p>
        </div>
        <div id="container-blur" class="w-[1550px] h-[650px] m-auto mt-6 rounded-xl flex justify-center items-center gap-20">
            <div class="mini-container w-[410px] h-[550px] rounded-xl flex flex-col justify-center items-center p-7">
                <img class="w-62" src="https://img.icons8.com/external-itim2101-lineal-itim2101/256/FFFFFF/external-blog-copywriting-itim2101-lineal-itim2101.png" alt="blog_img">
                <h1 class="text-white text-center text-2xl py-5 w-68">Create your own post or just see what peaople is inspired with</h1>
                <a class="text-white my-3 text-lg mt-5 bg-red-600 p-3 px-6 rounded-lg" href="{{ url('posts') }}">Know More</a>
            </div>
            <div class="mini-container w-[410px] h-[550px] rounded-xl flex flex-col justify-center items-center p-7">
                <img class="w-62" src="https://img.icons8.com/ios/256/FFFFFF/news.png" alt="blog_img">
                <h1 class="text-white text-center text-2xl py-5 w-68">Explore the recent services and the upcoming features.</h1>
                <button class="text-white my-3 text-lg mt-5 bg-red-600 p-3 px-6 rounded-lg" onclick="{{ url('') }}">Know More</button>
            </div>
            <div class="mini-container w-[410px] h-[550px] rounded-xl flex flex-col justify-center items-center p-7">
                <img class="w-62" src="https://img.icons8.com/wired/256/FFFFFF/name.png" alt="blog_img">
                <h1 class="text-white text-center text-2xl py-5 w-68">Create your own post or just see what peaople is inspired with</h1>
                <button class="text-white my-3 text-lg mt-5 bg-red-600 p-3 px-6 rounded-lg" onclick="{{ url('') }}">Know More</button>
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
        <div class="flex justify-center mt-12 px-0">
            <div class="text-center text-lg text-gray-100 dark:text-gray-200 sm:text-right sm:ml-0">
                <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} | Made by Bruno Amat</p>
            </div>
        </div>
    </main>
</body>

</html>