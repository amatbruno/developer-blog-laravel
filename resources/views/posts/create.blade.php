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

@section('title', 'Add Post')
@section('contenido')
<main>
    <div class="flex flex-col justify-center items-center m-auto">
        <!-- SVG VIEW -->
        <div class="flex justify-center my-6">
            <svg class="w-28" viewBox="0 0 281.25 281.25" id="svg2" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" fill="#7a0000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <defs id="defs4"></defs>
                    <g id="layer1" transform="translate(6693.6064,-3697.2496)">
                        <path d="m -6649.2778,3737.8013 a 4.6879687,4.6879687 0 0 0 -4.6875,4.6875 v 138.3252 a 4.6879687,4.6879687 0 0 0 4.6875,4.6875 h 54.4995 l 1.2982,47.8876 a 4.6879687,4.6879687 0 0 0 7.8937,3.2904 l 54.5215,-51.178 h 74.3793 a 4.6879687,4.6879687 0 0 0 4.6875,-4.6875 v -138.3252 a 4.6879687,4.6879687 0 0 0 -4.6875,-4.6875 z m 4.6875,9.375 h 183.2172 v 128.9502 h -71.5485 a 4.6875,4.6875 0 0 0 -0.1904,0.051 4.6875,4.6875 0 0 0 -2.016,0.5401 4.6875,4.6875 0 0 0 -0.3113,0.2106 4.6875,4.6875 0 0 0 -0.6903,0.4687 l -48.2629,45.3022 -1.1371,-42.0118 a 4.6875,4.6875 0 0 0 -0.022,-0.119 4.6875,4.6875 0 0 0 -0.2197,-1.1719 4.6875,4.6875 0 0 0 -0.068,-0.2233 4.6875,4.6875 0 0 0 -0.6079,-1.1206 4.6875,4.6875 0 0 0 -0.1703,-0.2088 4.6875,4.6875 0 0 0 -0.8953,-0.8459 4.6875,4.6875 0 0 0 -0.07,-0.059 4.6875,4.6875 0 0 0 -1.1737,-0.5585 4.6875,4.6875 0 0 0 -0.2637,-0.079 4.6875,4.6875 0 0 0 -1.1957,-0.1758 h -54.375 z" id="path3039" style="color:#7a0000;fill:#7a0000;fill-opacity:1;fill-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none"></path>
                    </g>
                </g>
            </svg>
        </div>

        <h1 class="text-white text-4xl text-center pb-8">Add a new post</h1>

        <div>
            <form class="max-w-sm mx-auto flex flex-col gap-6 justify-center items-center">
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                        </svg>
                    </div>
                    <input type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title">
                </div>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                        </svg>
                    </div>
                    <textarea rows="1" cols="25" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Content"></textarea>
                </div>

                <input type="submit" value="Add" class="text-sm font-medium bg-red-600 w-24 p-1.5 text-white rounded-md">
            </form>
        </div>
    </div>
</main>