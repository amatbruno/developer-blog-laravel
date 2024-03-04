@extends('layout/template')
@push('styles')
@vite('resources/css/app.css')
@endpush

@section('title', 'Posts')
@section('contenido')
<main>
    <div class="container py-4">
        <h1 class="text-5xl text-white text-center">Posts Feed</h2>
        <a class="bg-red-500 rounded-md p-2 text-white" href="{{ url('posts/create') }}">Add a post</a>
    </div>
</main>
@endsection