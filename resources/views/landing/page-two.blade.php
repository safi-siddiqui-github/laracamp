<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/x-icon">
    <meta name="description" content="Laracamp - Web Designer And Developer">

    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    <header class="flex flex-col md:flex-row gap-5 py-5 px-5 md:px-10 justify-between items-center shadow">
        <nav class="flex ">
            <div class="flex items-center justify-center gap-2">
                <img src="{{asset('images/logo/Laracamp.svg')}}" alt="Laracamp Logo" class="w-7">
                <a href="">
                    <h1 class="text-lg sm:font-medium">Laracamp</h1>
                </a>
            </div>
        </nav>

        <nav class="md:flex gap-4 font-medium tracking-tight hidden">
            <a href="">Apps</a>
            <a href="">Features</a>
            <a href="">About</a>
        </nav>

        <nav class="flex gap-4 font-medium">
            <a href="" class="px-5 py-2 text-sm rounded-full text-white bg-blue-700 hover:bg-black transition-all duration-200 ease-in-out">Log In</a>
            <a href="" class="px-5 py-2 text-sm rounded-full text-white bg-blue-700 hover:bg-red-700 transition-all duration-200 ease-in-out">Log Out</a>
        </nav>
    </header>

    <main class="flex flex-col">

        <section class="flex flex-col lg:flex-row md:items-center lg:gap-5 ">

            <div class="hidden lg:flex flex-col items-center justify-center lg:w-1/2 xl:w-2/3 lg:h-[690px] xl:h-[800px] bg-amber-100">
                <img src="{{asset('images/animated/work-animate.gif')}}" alt="Login Side" class="object-contain w-full lg:h-[400px] xl:h-[500px]">
            </div>

            <div class="flex flex-col px-5 py-5 md:py-10 lg:px-7 gap-10 bg-white md:w-[600px] lg:w-1/2 xl:w-1/3">
                <div class="flex items-center justify-center gap-2">
                    <img src="{{asset('images/logo/Laracamp.svg')}}" alt="Laracamp Logo" class="w-7">
                    <h1 class="text-lg font-medium">Laracamp</h1>
                </div>

                <div class="flex flex-col gap-10">
                    <div class="flex flex-col items-center gap-1 md:gap-2">
                        <h2 class="text-2xl md:text-4xl font-serif">
                            Welcome Back
                        </h2>
                        <p class="tracking-tight text-xs md:text-sm">
                            Enter your email and password to access your account
                        </p>
                    </div>

                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-1 font-medium">
                            <label for="email" class="text-sm">Email</label>
                            <input type="text" id="email" class="bg-slate-50 rounded-md p-2 text-sm tracking-tight focus:outline-black" placeholder="Enter your email">
                        </div>

                        <div class="flex flex-col gap-1 font-medium">
                            <label for="password" class="text-sm">Password</label>
                            <input type="password" id="password" class="bg-slate-50 rounded-md p-2 text-sm tracking-tight focus:outline-black" placeholder="Enter your password">
                        </div>

                        <div class="flex justify-between gap-1 font-medium text-sm items-center">
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" class="checked:bg-blue-600 w-3.5" name="remember" id="remember">
                                <label for="remember" class="">Remember me</label>
                            </div>
                            <a href="">Forgot Passowrd</a>
                        </div>
                    </div>

                    <div class="flex flex-col md:gap-4 gap-2 text-sm font-medium">
                        <button class="bg-black p-2 rounded-md text-white">Sign In</button>

                        <a href="" class="flex border rounded-md p-2 justify-center gap-5 items-center">
                            <img src="{{asset('images/icons/google.svg')}}" alt="google Logo" class="w-7">
                            <span>Sign in with Google</span>
                        </a>

                        <a href="" class="flex border rounded-md p-2 justify-center gap-5 items-center">
                            <img src="{{asset('images/icons/github.svg')}}" alt="github Logo" class="w-7">
                            <span>Sign in with Github</span>
                        </a>
                    </div>
                </div>

                <div class="flex flex-wrap items-center justify-center gap-2 text-sm text-center">
                    <a href="" class="font-medium">Continue to Home</a>
                    <p>|</p>
                    <a href="" class="font-medium">Login as Guest</a>
                </div>
            </div>
        </section>
    </main>

    <div class="lg:p-5 xl:p-10">
        <div class="flex flex-col lg:flex-row items-center gap-5 lg:gap-10 px-5 py-5 md:py-10 md:px-10 lg:py-10 lg:border lg:border-blue-500 lg:rounded-3xl bg-white lg:shadow-lg transition-all duration-100 ease-in-out lg:hover:shadow-xl lg:hover:border-2">

            <div class="bg-blue-500 flex flex-col w-full h-full xl:max-h-[700px] items-center justify-center rounded-xl lg:rounded-3xl lg:shadow-xl md:p-10 overflow-hidden">
                <img src="{{asset('images/landing/hero-security.gif')}}" alt="Hero Cloud" class="object-contain w-full h-full">
            </div>

            <div class="flex flex-col gap-4 md:gap-5 lg:gap-7">
                <div class="flex flex-col gap-1 lg:gap-2">
                    <h2 class="text-4xl lg:text-5xl xl:text-6xl font-medium">
                        Laracamp
                    </h2>
                    <h3 class="tracking-tight text-lg lg:text-xl xl:text-2xl">
                        Open Source Laravel Solution
                    </h3>
                </div>

                <div class="flex flex-wrap gap-2 lg:gap-4 tracking-tight">

                    <button class="flex items-center gap-1 group">
                        <img src="{{asset('images/icons/laravel.svg')}}" alt="laravel Icon" class="w-7 inline-block m-0.5 lg:group-hover:animate-bounce">
                        <span class="font-medium">Laravel</span>
                    </button>

                    <button class="flex items-center gap-1 group">
                        <img src="{{asset('images/icons/tailwind.svg')}}" alt="tailwind Icon" class="w-7 inline-block m-0.5 lg:group-hover:animate-bounce">
                        <span class="font-medium">Tailwind</span>
                    </button>

                    <button class="flex items-center gap-1 group">
                        <img src="{{asset('images/icons/livewire.svg')}}" alt="livewire Icon" class="w-7 inline-block m-0.5 lg:group-hover:animate-bounce">
                        <span class="font-medium">Livewire</span>
                    </button>

                </div>

                <div class="flex flex-col gap-2 lg:gap-4 tracking-tight xl:text-lg">
                    <p class="">
                        Laracamp Team Proudly present to You! a great Laravel Application that is completey open source for laravel community.
                    </p>

                    <p class="">
                        Our aim is to provide a complete Laravel App that is capable of building simple app to complex structures.
                    </p>
                </div>

                <div class="flex flex-col">

                    <a href="https://github.com/safi-siddiqui-github/laravel_app" target="_blank" class="border hover:border-blue-500 rounded font-medium px-5 py-2 flex items-center justify-center gap-4">
                        <span>Laracamp Github</span>
                        <img src="{{asset('images/icons/new-tab.svg')}}" alt="New Page Icon" class="w-6 inline-block">
                    </a>
                </div>

            </div>
        </div>

    </div>

    <div class="p-5 md:p-10 gap-10 flex flex-col" id="section-one">

        <div class="flex flex-col gap-1">
            <h2 class="text-5xl">Laracamps Built In Apps</h2>
            <p class="">Login as Guest and check our Apps</p>
        </div>

        <div class="grid md:grid-cols-4 grid-cols-1">

            <div class="flex flex-col border shadow rounded-xl p-5">
                <img src="{{asset('images/animated/message-animate.gif')}}" alt="message-animate" class="object-contain">

                <a href="" class="bg-gradient-to-r from-black to-blue-800 flex flex-col py-3 rounded-full items-center justify-center text-white">
                    <h3 class="text-lg">Notes App</h3>
                </a>
            </div>

        </div>
    </div>
    <div class="" id="section-two">
        <section class="p-3 md:p-5 lg:p-10 flex flex-col gap-10">

            <div class="flex flex-col gap-5 justify-between items-center md:py-10 md:px-5 rounded-xl md:bg-gradient-to-r from-white via-gray-100 to-blue-300">
                <img src="{{asset('images/stack/dazzle-tech.gif')}}" alt="Dazzle Tech" class="md:h-96 object-contain">

                <div class="flex flex-col gap-1 lg:gap-2 tracking-tight">
                    <h2 class="text-3xl md:text-5xl lg:text-6xl xl:text-7xl font-medium text-slate-700 font-serif">
                        Laracamp's Tech Stack
                    </h2>
                    <p class="trackng-tight text-slate-500 text-sm md:text-base lg:text-lg xl:text-xl">
                        Laracamp uses the following technologies for Development
                    </p>
                </div>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-10 md:gap-5 lg:gap-10 xl:gap-5 2xl:gap-10">

                <div class="flex flex-col p-2 rounded-2xl relative border-2 shadow border-slate-200 transition-all duration-100 ease-in-out hover:border-red-500 lg:hover:shadow-lg bg-white overflow-hidden">
                    <div class="flex flex-col px-5 pt-28 pb-5 z-10 gap-3 items-center md:items-start">
                        <div class="flex items-center justify-center p-5 rounded-full w-32 h-32 border-4 bg-red-100 border-white transition-all duration-100 ease-in-out hover:p-6">
                            <img src="{{asset('images/icons/laravel.svg')}}" alt="Laravel Icon" class="object-contain w-full h-full">
                        </div>

                        <div class="flex flex-col md:justify-between w-full gap-2">
                            <div class="flex flex-col">
                                <p class="text-red-500 tracking-tight font-medium">@/Laravel</p>
                                <p class="text-slate-400 tracking-tight">#Full-Stack-App</p>
                                <p class="tracking-tight">Laracamp's Full Stack Choice</p>
                            </div>

                            <button class="bg-red-500 text-sm font-medium text-white rounded-md py-2 tracking-wider">Laracamp</button>
                        </div>
                    </div>

                    <div class="absolute top-0 left-0 w-full h-full p-2">
                        <div class="rounded-2xl h-44 md:h-40 w-full flex items-center justify-center bg-gradient-to-r from-red-800 via-red-700 to-red-500">
                            <h3 class="text-white text-2xl font-medium mb-5 md:mb-0">Laravel</h3>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col p-2 rounded-2xl relative border-2 shadow border-slate-200 transition-all duration-100 ease-in-out hover:border-sky-500 lg:hover:shadow-lg bg-white overflow-hidden">
                    <div class="flex flex-col px-5 pt-28 pb-5 z-10 gap-3 items-center md:items-start">
                        <div class="flex items-center justify-center p-5 rounded-full w-32 h-32 border-4 bg-sky-100 border-white transition-all duration-100 ease-in-out hover:p-6">
                            <img src="{{asset('images/icons/tailwind.svg')}}" alt="tailwind Icon" class="object-contain w-full h-full">
                        </div>

                        <div class="flex flex-col md:justify-between w-full gap-2">
                            <div class="flex flex-col">
                                <p class="text-sky-500 tracking-tight font-medium">@/TailwindCSS</p>
                                <p class="text-slate-400 tracking-tight">#Web-Design</p>
                                <p class="tracking-tight">Laracamp's Full Stack Choice</p>
                            </div>

                            <button class="bg-sky-500 text-sm font-medium text-white rounded-md py-2 tracking-wider">Laracamp</button>
                        </div>
                    </div>

                    <div class="absolute top-0 left-0 w-full h-full p-2">
                        <div class="rounded-2xl h-44 md:h-40 w-full flex items-center justify-center bg-gradient-to-r from-sky-800 via-sky-700 to-sky-500">
                            <h3 class="text-white text-2xl font-medium mb-5 md:mb-0">Tailwind CSS</h3>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col p-2 rounded-2xl relative border-2 shadow border-slate-200 transition-all duration-100 ease-in-out hover:border-fuchsia-500 lg:hover:shadow-lg bg-white overflow-hidden">
                    <div class="flex flex-col px-5 pt-28 pb-5 z-10 gap-3 items-center md:items-start">
                        <div class="flex items-center justify-center p-5 rounded-full w-32 h-32 border-4 bg-fuchsia-100 border-white transition-all duration-100 ease-in-out hover:p-6">
                            <img src="{{asset('images/icons/livewire.svg')}}" alt="livewire Icon" class="object-contain w-full h-full">
                        </div>

                        <div class="flex flex-col md:justify-between w-full gap-2">
                            <div class="flex flex-col">
                                <p class="text-fuchsia-500 tracking-tight font-medium">@/Livewire</p>
                                <p class="text-slate-400 tracking-tight">#Blade-Framework</p>
                                <p class="tracking-tight">Laracamp's Full Stack Choice</p>
                            </div>

                            <button class="bg-fuchsia-500 text-sm font-medium text-white rounded-md py-2 tracking-wider">Laracamp</button>
                        </div>
                    </div>

                    <div class="absolute top-0 left-0 w-full h-full p-2">
                        <div class="rounded-2xl h-44 md:h-40 w-full flex items-center justify-center bg-gradient-to-r from-fuchsia-800 via-fuchsia-700 to-fuchsia-500">
                            <h3 class="text-white text-2xl font-medium mb-5 md:mb-0">Livewire</h3>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col p-2 rounded-2xl relative border-2 shadow border-slate-200 transition-all duration-100 ease-in-out hover:border-purple-500 lg:hover:shadow-lg bg-white overflow-hidden">
                    <div class="flex flex-col px-5 pt-28 pb-5 z-10 gap-3 items-center md:items-start">
                        <div class="flex items-center justify-center p-5 rounded-full w-32 h-32 border-4 bg-purple-100 border-white transition-all duration-100 ease-in-out hover:p-6">
                            <img src="{{asset('images/icons/php.svg')}}" alt="php Icon" class="object-contain w-full h-full">
                        </div>

                        <div class="flex flex-col md:justify-between w-full gap-2">
                            <div class="flex flex-col">
                                <p class="text-purple-500 tracking-tight font-medium">@/PHP</p>
                                <p class="text-slate-400 tracking-tight">#Server-Side-Scripts</p>
                                <p class="tracking-tight">Laracamp's Full Stack Choice</p>
                            </div>

                            <button class="bg-purple-500 text-sm font-medium text-white rounded-md py-2 tracking-wider">Laracamp</button>
                        </div>
                    </div>

                    <div class="absolute top-0 left-0 w-full h-full p-2">
                        <div class="rounded-2xl h-44 md:h-40 w-full flex items-center justify-center bg-gradient-to-r from-purple-800 via-purple-700 to-purple-500">
                            <h3 class="text-white text-2xl font-medium mb-5 md:mb-0">PHP</h3>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col p-2 rounded-2xl relative border-2 shadow border-slate-200 transition-all duration-100 ease-in-out hover:border-slate-500 lg:hover:shadow-lg bg-white overflow-hidden">
                    <div class="flex flex-col px-5 pt-28 pb-5 z-10 gap-3 items-center md:items-start">
                        <div class="flex items-center justify-center p-5 rounded-full w-32 h-32 border-4 bg-slate-100 border-white transition-all duration-100 ease-in-out hover:p-6">
                            <img src="{{asset('images/icons/github.svg')}}" alt="github Icon" class="object-contain w-full h-full">
                        </div>

                        <div class="flex flex-col md:justify-between w-full gap-2">
                            <div class="flex flex-col">
                                <p class="text-slate-500 tracking-tight font-medium">@/Github</p>
                                <p class="text-slate-400 tracking-tight">#Version-Control</p>
                                <p class="tracking-tight">Laracamp's Full Stack Choice</p>
                            </div>

                            <button class="bg-slate-500 text-sm font-medium text-white rounded-md py-2 tracking-wider">Laracamp</button>
                        </div>
                    </div>

                    <div class="absolute top-0 left-0 w-full h-full p-2">
                        <div class="rounded-2xl h-44 md:h-40 w-full flex items-center justify-center bg-gradient-to-r from-slate-800 via-slate-700 to-slate-500">
                            <h3 class="text-white text-2xl font-medium mb-5 md:mb-0">Github</h3>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col p-2 rounded-2xl relative border-2 shadow border-slate-200 transition-all duration-100 ease-in-out hover:border-orange-500 lg:hover:shadow-lg bg-white overflow-hidden">
                    <div class="flex flex-col px-5 pt-28 pb-5 z-10 gap-3 items-center md:items-start">
                        <div class="flex items-center justify-center p-5 rounded-full w-32 h-32 border-4 bg-orange-100 border-white transition-all duration-100 ease-in-out hover:p-6">
                            <img src="{{asset('images/icons/html.svg')}}" alt="html Icon" class="object-contain w-full h-full">
                        </div>

                        <div class="flex flex-col md:justify-between w-full gap-2">
                            <div class="flex flex-col">
                                <p class="text-orange-500 tracking-tight font-medium">@/HTML</p>
                                <p class="text-orange-400 tracking-tight">#Semantic-Markup</p>
                                <p class="tracking-tight">Laracamp's Full Stack Choice</p>
                            </div>

                            <button class="bg-orange-500 text-sm font-medium text-white rounded-md py-2 tracking-wider">Laracamp</button>
                        </div>
                    </div>

                    <div class="absolute top-0 left-0 w-full h-full p-2">
                        <div class="rounded-2xl h-44 md:h-40 w-full flex items-center justify-center bg-gradient-to-r from-orange-800 via-orange-700 to-orange-500">
                            <h3 class="text-white text-2xl font-medium mb-5 md:mb-0">HTML</h3>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col p-2 rounded-2xl relative border-2 shadow border-slate-200 transition-all duration-100 ease-in-out hover:border-blue-500 lg:hover:shadow-lg bg-white overflow-hidden">
                    <div class="flex flex-col px-5 pt-28 pb-5 z-10 gap-3 items-center md:items-start">
                        <div class="flex items-center justify-center p-5 rounded-full w-32 h-32 border-4 bg-blue-100 border-white transition-all duration-100 ease-in-out hover:p-6">
                            <img src="{{asset('images/icons/css.svg')}}" alt="css Icon" class="object-contain w-full h-full">
                        </div>

                        <div class="flex flex-col md:justify-between w-full gap-2">
                            <div class="flex flex-col">
                                <p class="text-blue-500 tracking-tight font-medium">@/CSS</p>
                                <p class="text-blue-400 tracking-tight">#Latest-Styles</p>
                                <p class="tracking-tight">Laracamp's Full Stack Choice</p>
                            </div>

                            <button class="bg-blue-500 text-sm font-medium text-white rounded-md py-2 tracking-wider">Laracamp</button>
                        </div>
                    </div>

                    <div class="absolute top-0 left-0 w-full h-full p-2">
                        <div class="rounded-2xl h-44 md:h-40 w-full flex items-center justify-center bg-gradient-to-r from-blue-800 via-blue-700 to-blue-500">
                            <h3 class="text-white text-2xl font-medium mb-5 md:mb-0">CSS</h3>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col p-2 rounded-2xl relative border-2 shadow border-slate-200 transition-all duration-100 ease-in-out hover:border-yellow-500 lg:hover:shadow-lg bg-white overflow-hidden">
                    <div class="flex flex-col px-5 pt-28 pb-5 z-10 gap-3 items-center md:items-start">
                        <div class="flex items-center justify-center p-5 rounded-full w-32 h-32 border-4 bg-yellow-100 border-white transition-all duration-100 ease-in-out hover:p-6">
                            <img src="{{asset('images/icons/javascript.svg')}}" alt="javascript Icon" class="object-contain w-full h-full">
                        </div>

                        <div class="flex flex-col md:justify-between w-full gap-2">
                            <div class="flex flex-col">
                                <p class="text-yellow-500 tracking-tight font-medium">@/Javascript</p>
                                <p class="text-yellow-400 tracking-tight">#Chromium-Interaction</p>
                                <p class="tracking-tight">Laracamp's Full Stack Choice</p>
                            </div>

                            <button class="bg-yellow-500 text-sm font-medium text-white rounded-md py-2 tracking-wider">Laracamp</button>
                        </div>
                    </div>

                    <div class="absolute top-0 left-0 w-full h-full p-2">
                        <div class="rounded-2xl h-44 md:h-40 w-full flex items-center justify-center bg-gradient-to-r from-yellow-800 via-yellow-700 to-yellow-500">
                            <h3 class="text-white text-2xl font-medium mb-5 md:mb-0">javascript</h3>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <div class="flex flex-col md:flex-row">

        <div class="flex flex-col md:w-1/2 gap-10 p-5">
            <h2 class="text-xl">
                List Notes
            </h2>

            <div class="flex flex-col gap-2">

                <div class="flex flex-col shadow p-3 rounded-xl gap-5">

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-5">
                            <img src="{{asset('images/icons/face-scan.svg')}}" alt="face-scan" class="object-contain w-16">

                            <div class="flex flex-col gap-1">

                                <div class="flex items-center gap-2">
                                    <img src="{{asset('images/icons/calender.svg')}}" alt="calender" class="w-5 object-contain">
                                    <p class="text-xs font-medium">Mon 9, June/p>
                                </div>

                                <div class="flex items-center gap-2">
                                    <img src="{{asset('images/icons/clock.svg')}}" alt="clock" class="w-5 object-contain">
                                    <p class="text-xs font-medium">11:55 AM</p>
                                </div>

                                <div class="flex items-center gap-2">
                                    <img src="{{asset('images/icons/mail.svg')}}" alt="mail" class="w-5 object-contain">
                                    <p class="text-xs font-medium">Alevile</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <button class="w-6" wire:click="delete('')">
                                <img src="{{asset('images/icons/delete.svg')}}" alt="delete" class="object-contain">
                            </button>

                            <button class="w-6" wire:click="set_update('')">
                                <img src="{{asset('images/icons/edit.svg')}}" alt="edit" class="object-contain">
                            </button>

                            <button class="w-6">
                                <img src="{{asset('images/icons/publish.svg')}}" alt="publish" class="object-contain">
                            </button>

                        </div>
                    </div>

                    <hr>

                    <div class="flex flex-col gap-1">
                        <p class="text-xl">Note one</p>
                        <p class="text-sm">Note is a note</p>
                    </div>
                </div>

                <div class="border flex justify-center rounded-xl py-5">
                    <p class="text-xl text-slate-400 italic">No Notes. Add some!</p>
                </div>

            </div>

        </div>

        <div class="flex flex-col md:w-1/2 gap-10 p-5">
            <h2 class="text-xl">
                Send Notes
            </h2>

            <div class="flex flex-col gap-2">

                <div class="flex flex-col">
                    <label for="title" class="font-medium">Title</label>
                    <input type="text" wire:model="title" id="title" placeholder="Place a title" class="border rounded px-3 py-1">
                    @error('title')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="recipient" class="font-medium">Recipient</label>
                    <input type="text" wire:model="recipient" id="recipient" placeholder="recipient@gmail.com" class="border rounded px-3 py-1">
                    @error('recipient')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="note" class="font-medium">Note</label>
                    <textarea wire:model="body" id="note" cols="30" rows="5" placeholder="My note to ..." class="border rounded px-3 py-2"></textarea>
                    @error('body')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="send_date" class="font-medium">Date / Time</label>
                    <input type="date" wire:model="send_date" id="send_date" class="border rounded px-3 py-2">
                    @error('send_date')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    <input type="time" wire:model="send_time" id="send_time" class="border rounded px-3 py-2">
                    @error('send_time')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex justify-start items-center gap-2">
                    <label for="is_published" class="font-medium">Publish</label>
                    <input type="checkbox" wire:model="is_published" id="is_published" class="border rounded h-4 w-4 accent-black">
                    @error('is_published')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <button class="bg-black py-2 text-center rounded w-fit px-5 text-white mt-5" wire:click="update('')">
                    <span>Update</span>
                </button>
                <button class="bg-black py-2 text-center rounded w-fit px-5 text-white mt-5" wire:click="save">
                    <span>Save</span>
                </button>

            </div>

        </div>
    </div>

    <footer class="w-full z-20">
        <div class="flex flex-col w-full py-3 px-5 bg-white border-t-2">

            <nav class="flex items-center gap-5 justify-between">

                <a href="#hero" class="flex flex-col items-center justify-center">
                    <img src="{{asset('images/icons/home.svg')}}" alt="home" class="w-10 object-contain">
                    <span class="font-medium">Home</span>
                </a>

                <a href="#section-one" class="flex flex-col items-center justify-center">
                    <img src="{{asset('images/icons/apps.svg')}}" alt="apps" class="w-10 object-contain">
                    <span class="font-medium">Apps</span>
                </a>

                <a href="#section-two" class="flex flex-col items-center justify-center">
                    <img src="{{asset('images/icons/code.svg')}}" alt="code" class="w-10 object-contain">
                    <span class="font-medium">Tech</span>
                </a>

                @auth
                <a href="" class="flex flex-col items-center justify-center">
                    <img src="{{asset('images/icons/logout.svg')}}" alt="logout" class="w-10 object-contain">
                    <span class="font-medium">Logout</span>
                </a>
                @else
                <a href="" class="flex flex-col items-center justify-center">
                    <img src="{{asset('images/icons/login.svg')}}" alt="login" class="w-10 object-contain">
                    <span class="font-medium">Login</span>
                </a>
                @endauth

            </nav>

        </div>
    </footer>

</body>

</html>