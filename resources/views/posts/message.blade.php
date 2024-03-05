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

@extends('layout/template')
@section('title', 'Feed Posts | Blog')
@section('contenido')

<main>
    <div class="flex flex-col gap-5">
        <h2 class="text-white text-2xl">{{ $mssg }}</h2>
        <a class="bg-red-500 rounded-md p-2 text-white" href="{{ url('posts') }}">Go back</a>
    </div>
</main>