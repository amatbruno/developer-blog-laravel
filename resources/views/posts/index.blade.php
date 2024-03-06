@extends('layout/template')
@push('styles')
@vite('resources/css/app.css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

    * {
        padding: 0;
        margin: 0;
        font-family: "Inter", sans-serif;
    }

    body {
        background-color: #111827;
        font-family: "Inter", sans-serif;
        color: white
    }
</style>
@endpush

@section('title', 'Dev Blog | Feed')
@section('contenido')
<body>
<main>
    <div class="flex flex-col gap-7 w-[350px] lg:w-[950px] md:w-[550px] sm:w-[350px] m-auto">
        <h1 class="text-5xl text-white mt-10 underline">Posts Feed</h1>
        <p class="text-gray-400 text-lg">Discover the new posts by the users! Help others 
        with issues/doubts or just provide your opinion in some field.</p>
    </div>
    <div class="py-4 flex m-auto justify-center mb-3 mt-3 w-[250px] lg:w-[350px] sm:w-[400px] gap-6">
        <a class="bg-red-600 rounded-md p-2 text-white" href="{{ url('/') }}">Back to homepage</a>
        <a class="bg-red-600 rounded-md p-2 text-white" href="{{ url('posts/create') }}">Add a post</a>
    </div>

    <hr class="border border-white w-[450px] lg:w-[1050px] md:w-[750px] m-auto">

    <section class="container mx-auto mt-12 p-6 flex flex-col justify-center items-center gap-14">
        <!--POST CARD-->
        @foreach($posts as $pt)
        <div class="h-fit lg:w-[800px] md:w-[600px] w-[550px] p-4 border-2 border-white 
        rounded-lg hover:border-red-500 transition-all">
            <div class="flex items-center justify-between pb-5">
                <div class="flex items-center gap-6">
                    <img class="w-16 rounded-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="user-avatar">
                    <h1 class="text-2xl py-3 font-semibold">{{ $pt->title }}</h1>
                </div>
                <div class="flex flex-col gap-3 text-end">
                    <p class="text-gray-300 text-xl font-semibold">Writted by {{ $pt->id }}</p>
                    <p class="text-gray-400 text-md">Published at {{ $pt->publish_date }}</p>
                </div>
                <a href="{{ url('/posts/'.$pt->id.'/edit') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="hover:stroke-red-600 transition-all" width="24" height="24" 
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" 
                        stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" 
                        fill="none"/>
                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                        <path d="M13.5 6.5l4 4" />
                    </svg>
                </a>
            </div>
            <hr>
            <h3 class="mt-6 text-xl mb-6">{{ $pt->content }}</h3>
            <hr>
            <div class="mt-4 flex gap-4">
                <textarea class="bg-transparent border-2 w-[400px] px-1" type="text" name="comment" id="comment" placeholder="Your comment here..."></textarea>
                <input class="bg-red-600 p-2 rounded-lg hover:cursor-pointer hover:bg-red-900" type="submit" value="Comment">
            </div>
        </div>
        @endforeach
    </section>
</main>
</body>
@endsection