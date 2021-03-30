@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-1oo pd-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do you want to become a developer?
            </h1>
            <a
                href="/blog"
                class="text-center bg-gray-50 text-gray-70 py-2 px-4
                font-bold text-xl uppercase">Read more</a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5
mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2014/05/02/21/49/laptop-336373_1280.jpg" width="700px" alt="">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-4xl font-extrabold text-gray-600">
            Struggling to be a better web developer
        </h2>
        <p class="py-8 text-gray-500 text-xl">
            This is a good opportunity to share your ideas and discuss them.
        </p>
        <p class="font-extrabold text-gray-600 test-xl pb-9">
            We beleive in "help is out there", and we are looking forward for you to reach out and get help as well as be helpful to others
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
        Find out more
        </a>
    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I'm an expert in...
    </h2>

    <span class="font-extrabold block text-4xl py-1">
        UX Desing
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Project Management
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Digital Strategy
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Backend Developement
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gary-400">
        Blog
    </span>

    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>

</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto" >
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                PHP
            </span>
            <h3 class="text-xl font-bold py-10">
                PHP is a popular general-purpose scripting language that is especially suited to web development.
                Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.
            </h3>
            <a href="/blog" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out more
            </a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2014/05/02/21/49/laptop-336373_1280.jpg" width="700px" alt="">
    </div>
</div>
@endsection
