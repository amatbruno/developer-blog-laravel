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


        /*MEDIA QUERIES*/
        /* Media query for mobile screens */
        @media only screen and (max-width: 767px) {
            #background-red {
                height: 500px;
            }
            
            #container-blur {
                display: flex;
                flex-direction: column;
                justify-content: start;
                align-items: center;
                width: 500px;
                height: fit-content;
                padding-bottom: 20px;
                padding-top: 20px;
                gap: 2.5rem;
            }

            #container-blur .mini-container img {
                width: 180px
            }
            
            #container-blur .mini-container h1 {
                font-size: 20px;
                width: 240px;
                padding-top: 30px;
                padding-bottom: 30px;
            }

            #container-blur .mini-container a {
                font-size: 19px
            }
        }

        /* Media query for tablets in landscape mode */
        @media only screen and (min-width: 768px) and (max-width: 1023px) {
            #container-blur {
                display: grid;
                grid-template-columns: auto auto;
                gap: 2rem;
                width: 820px;
                height: fit-content;
                padding: 20px;
            }

            #container-blur .mini-container {
                width: 360px;
                
            }

            #container-blur .mini-container img {
                width: 150px
            }

            #container-blur .mini-container h1 {
                font-size: 19px;
                width: 230px;
            }
        }

        /* Media query for desktop */
        @media only screen and (min-width: 1024px) {
            #container-blur .mini-container {
                width: 360px;
            }

            #container-blur {
                width: 1200px;
            }
        }

    </style>
</head>

<body class="antialiased">
    <main id="background-red" class="bg-red-800 h-[420px]">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h1 class="text-7xl text-white font-bold text-center">DEVELOPERS BLOG</h1>
            <p class="text-white text-2xl text-center mt-12">Discover. Inspire. Thrive.</p>
        </div>
        <div id="container-blur" class="h-[600px] m-auto mt-5 rounded-xl flex justify-center items-center gap-8">
            <div class="mini-container h-[530px] rounded-xl flex flex-col justify-center items-center p-7">
                <img class="w-44" src="https://img.icons8.com/external-itim2101-lineal-itim2101/256/FFFFFF/external-blog-copywriting-itim2101-lineal-itim2101.png" alt="blog_img">
                <h1 class="text-white text-center text-2xl py-5 w-[290px]">Create your own post or just see what peaople is inspired with</h1>
                <a class="text-white my-3 text-lg mt-5 bg-red-600 p-3 px-6 rounded-lg" href="{{ url('posts') }}">Post Feed</a>
            </div>
            <div class="mini-container h-[530px] rounded-xl flex flex-col justify-center items-center p-7">
                <img class="w-44" src="https://img.icons8.com/ios/256/FFFFFF/news.png" alt="blog_img">
                <h1 class="text-white text-center text-2xl py-5 w-[290px]">Explore the recent services and the upcoming features.</h1>
                <a class="text-white my-3 text-lg mt-5 bg-red-600 p-3 px-6 rounded-lg" onclick="{{ url('') }}">Blog News</a>
            </div>
            <div class="mini-container h-[530px] rounded-xl flex flex-col justify-center items-center p-7">
                <img class="w-44" src="https://img.icons8.com/wired/256/FFFFFF/name.png" alt="blog_img">
                <h1 class="text-white text-center text-2xl py-5 w-[200px]">Manage posts and customize your profile</h1>
                <a class="text-white my-3 text-lg mt-5 bg-red-600 p-3 px-6 rounded-lg" onclick="{{ url('') }}">User Area</a>
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
        <div class="flex justify-center mt-12  px-0">
            <div class="text-center text-lg text-gray-100 dark:text-gray-200 sm:text-right sm:ml-0 mb-12">
                <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} | Made by Bruno Amat</p>
            </div>
        </div>
    </main>
</body>

</html>