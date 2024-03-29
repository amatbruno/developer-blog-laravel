@extends('layout/template')
@push('styles')
@vite('resources/css/app.css')
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background-color: #111827;
    }

    main {
        text-align: center;
    }

    .flex-col-center {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
@endpush

@section('title', 'New Post | Blog')
@section('contenido')
<main>
    <div>
        <!-- SVG VIEW -->
        <div class="flex justify-center my-6">
            <svg class="w-28" viewBox="0 0 281.25 281.25" id="svg2" 
            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" 
            xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" 
            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" 
            fill="#7a0000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <defs id="defs4"></defs>
                    <g id="layer1" transform="translate(6693.6064,-3697.2496)">
                        <path d="m -6649.2778,3737.8013 a 4.6879687,4.6879687 0 0 0 
                        -4.6875,4.6875 v 138.3252 a 4.6879687,4.6879687 0 0 0 4.6875,4.6875 
                        h 54.4995 l 1.2982,47.8876 a 4.6879687,4.6879687 0 0 0 7.8937,3.2904 
                        l 54.5215,-51.178 h 74.3793 a 4.6879687,4.6879687 0 0 0 4.6875,-4.6875 
                        v -138.3252 a 4.6879687,4.6879687 0 0 0 -4.6875,-4.6875 z m 4.6875,9.375 
                        h 183.2172 v 128.9502 h -71.5485 a 4.6875,4.6875 0 0 0 -0.1904,0.051 
                        4.6875,4.6875 0 0 0 -2.016,0.5401 4.6875,4.6875 0 0 0 -0.3113,0.2106 
                        4.6875,4.6875 0 0 0 -0.6903,0.4687 l -48.2629,45.3022 -1.1371,-42.0118 
                        a 4.6875,4.6875 0 0 0 -0.022,-0.119 4.6875,4.6875 0 0 0 -0.2197,-1.1719 
                        4.6875,4.6875 0 0 0 -0.068,-0.2233 4.6875,4.6875 0 0 0 -0.6079,-1.1206 
                        4.6875,4.6875 0 0 0 -0.1703,-0.2088 4.6875,4.6875 0 0 0 -0.8953,-0.8459 
                        4.6875,4.6875 0 0 0 -0.07,-0.059 4.6875,4.6875 0 0 0 -1.1737,-0.5585 
                        4.6875,4.6875 0 0 0 -0.2637,-0.079 4.6875,4.6875 0 0 0 -1.1957,-0.1758 
                        h -54.375 z" id="path3039" style="color:#7a0000;fill:#7a0000;fill-opacity:1;fill-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none">
                    </path>
                    </g>
                </g>
            </svg>
        </div>

        <h1 class="text-white text-4xl text-center pb-8">Add A New Post</h1>


        @if ($errors->any())
        <div class="flex text-start p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 
        dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 
                0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 
                1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Danger</span>
            <div>
                <span class="font-medium">Ensure that these requirements are met and try again:</span>
                <ul class="mt-1.5 list-disc list-inside">
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        <div>
            <form class="max-w-md mx-auto" action="{{ url('posts') }}" method="post">

                @csrf

                <div class="relative z-0 w-full mb-5 group text-start">
                    <input type="text" name="title" id="title" class="block py-2.5 px-0 w-full 
                    text-md text-gray-900 bg-transparent 
                    border-0 border-b-2 border-gray-300 appearance-none 
                    dark:text-white dark:border-gray-600 
                    dark:focus:border-red-500 focus:outline-none 
                    focus:ring-0 focus:border-red-600 peer" value="{{ old('title') }}" placeholder=" " />
                    <label for="title" class="peer-focus:font-medium 
                    absolute text-sm text-gray-500 dark:text-gray-400 
                    duration-300 transform -translate-y-6 scale-75 top-3 -z-10 
                    origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 
                    rtl:peer-focus:left-auto peer-focus:text-red-600 
                    peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 
                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75 
                    peer-focus:-translate-y-6">Post title</label>
                </div>
                <div class="relative z-0 w-full mb-5 group text-start">
                    <textarea rows="2" name="content" id="content" class="block py-2.5 px-0 
                    w-full text-md text-gray-900 bg-transparent resize-none 
                    border-0 border-b-2 border-gray-300 appearance-none dark:text-white
                    dark:border-gray-600 dark:focus:border-red-500 focus:outline-none 
                    focus:ring-0 focus:border-red-600 peer text-balance" value="{{ old('content') }}" placeholder=" "></textarea>
                    <label for="content" class="peer-focus:font-medium absolute text-sm 
                    text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 
                    scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 
                    peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 
                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Content</label>
                </div>

                <div class="flex gap-6 justify-center">
                    <a class="text-white bg-red-700 hover:bg-red-900 
                focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg 
                text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 
                dark:hover:bg-red-900 dark:focus:ring-red-900 transition-colors mt-6" href="{{ url('posts') }}">Go back</a>

                    <button type="submit" class="text-white bg-green-800 hover:bg-green-900 
                focus:ring-4 focus:outline-none focus:ring-green-400 font-medium rounded-lg 
                text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-700 
                dark:hover:bg-green-900 dark:focus:ring-green-900 transition-colors mt-6">Submit</button>
                </div>

            </form>

        </div>
    </div>
</main>