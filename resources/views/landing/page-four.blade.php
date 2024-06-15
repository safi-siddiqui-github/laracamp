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

    <div class="2xl:container 2xl:mx-auto justify-between lg:px-10 px-5 py-4 items-center tracking-tight bg-stone-100 md:flex hidden">
        <div class="flex gap-5">

            <a href="" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-7 h-7">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                </svg>
            </a>

            <a href="" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-7 h-7">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                </svg>
            </a>
        </div>
        <div class="gap-5 flex">
            <a href="">Find a Store</a>
            <a href="">Help</a>
            <a href="">Join Us</a>
            <a href="">Sign In</a>
            <a href="">Newsletter</a>
        </div>
    </div>

    <div class="flex justify-between lg:px-10 px-5 py-4 items-center tracking-tight">

        <a href="">
            <img src="{{asset('images/nike/nike-logo.png')}}" alt="nike-logo" class="w-16" />
        </a>

        <div class="gap-5 font-medium text-xl hidden lg:flex">
            <a href="">New &amp; Featured</a>
            <a href="">Men</a>
            <a href="">Women</a>
            <a href="">Kids</a>
        </div>

        <div class="flex gap-5 items-center">

            <a href="" class="lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </a>

            <div class="items-center bg-slate-100 rounded-full px-4 py-2 text-lg gap-2 hidden lg:flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
                <input type="text" placeholder="Search" class="bg-transparent w-32 outline-none" />
            </div>

            <a href="" class="hidden lg:block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </a>

            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </a>

            <button class="lg:hidden" id="nike-menu-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>

        </div>
    </div>

    <div class="flex-col gap-10 lg:px-10 px-5 py-4 hidden lg:hidden" id="nike-menu">

        <div class="flex flex-col gap-5">

            <a href="" class="flex items-center gap-10 justify-between">
                <h3 class="text-xl">
                    New Arrivals
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>

            <a href="" class="flex items-center gap-10 justify-between">
                <h3 class="text-xl">
                    Men
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>

            <a href="" class="flex items-center gap-10 justify-between">
                <h3 class="text-xl">
                    Women
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>

            <a href="" class="flex items-center gap-10 justify-between">
                <h3 class="text-xl">
                    Kids
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>

            <a href="" class="flex items-center gap-10 justify-between">
                <h3 class="text-xl">
                    Accessories
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>

            <a href="" class="flex items-center gap-10 justify-between">
                <h3 class="text-xl">
                    Sale
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>

        </div>

        <div class="flex flex-col gap-5">

            <a href="" class="flex items-center gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-7 h-7">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                </svg>
                <h3 class="text-xl">
                    Stars
                </h3>
            </a>

            <a href="" class="flex items-center gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-7 h-7">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                </svg>
                <h3 class="text-xl">
                    Town
                </h3>
            </a>

            <a href="" class="flex gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                <h3 class="text-xl">
                    Bag
                </h3>
            </a>

            <a href="" class="flex gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>
                <h3 class="text-xl">
                    Orders
                </h3>
            </a>

            <a href="" class="flex gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                </svg>
                <h3 class="text-xl">
                    Find A Store
                </h3>
            </a>

            <a href="" class="flex gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                </svg>
                <h3 class="text-xl">
                    Help
                </h3>
            </a>

        </div>

        <div class="flex flex-col gap-5 items-center flex-wrap">
            <p class="text-xl text-slate-500 md:w-2/4 text-center">
                Become a Nike Member for the best products, inspiration and stories in sport.
                <a href="" class="text-slate-900 font-medium">Learn More</a>
            </p>

            <div class="flex gap-3 flex-wrap justify-center">
                <a href="" class="font-medium bg-black text-white rounded-full px-5 py-2 hover:bg-black/90">
                    Join Us
                </a>
                <a href="" class="font-medium bg-teal-700 text-white rounded-full px-5 py-2 hover:bg-teal-700/90">
                    Sign In
                </a>
                <a href="" class="font-medium rounded-full px-5 py-2 bg-stone-200 flex items-center gap-3">
                    <p class="font-medium">
                        Newsletter
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </a>
            </div>

        </div>



    </div>

    <div class="2xl:container 2xl:mx-auto hidden">
        <div class="flex flex-col gap-10 lg:px-10 px-5 py-4 border-t">

            <div class="flex flex-col gap-5">

                <a href="" class="flex items-center gap-10 justify-between">
                    <h3 class="text-xl">
                        Go Back To Menu
                    </h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </a>

                <h3 class="text-2xl font-medium">
                    Home
                </h3>

                <a href="" class="flex items-center gap-10 justify-between">
                    <h3 class="text-xl">
                        Sub Title
                    </h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="flex flex-col lg:px-10 px-5 lg:gap-10 gap-5">
        <div class="">
            <img src="{{asset('images/nike/home/shoes-one.jpg')}}" alt="nike-shoes1" class="w-full object-cover h-96 md:h-[35rem] lg:h-[45rem] xl:h-[50rem] rounded" />
        </div>
        <div class="flex flex-col gap-5 lg:items-center">
            <h1>
                <a href="" class="text-6xl font-bold tracking-tighter">
                    EYE CATCHING AIR
                </a>
            </h1>

            <p class="">
                Bold styles like the neon-popping Air Max SYSTM, add flavour to your fit
            </p>
        </div>

        <div class="flex flex-col md:flex-row gap-2 items-start lg:justify-center">

            <a href="" class="rounded-full px-5 py-2 bg-black text-white hover:bg-blue-700">
                Shop Men's Air
            </a>
            <a href="" class="rounded-full px-5 py-2 bg-black text-white hover:bg-blue-700">
                Shop Women's Air
            </a>
            <a href="" class="rounded-full px-5 py-2 bg-black text-white hover:bg-blue-700">
                Shop Kid's Air
            </a>
        </div>
    </div>

    <div class="flex flex-col lg:px-10 px-5 lg:gap-10 gap-5 my-10">

        <div class="flex justify-between items-center">
            <h2 class="md:text-3xl text-xl font-medium">
                Gear Up for Spring Sports
            </h2>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6 xl:hidden">
                <path strokeLinecap="round" strokeLinejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
            </svg>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-5 lg:gap-10 pb-5">
            <div class="flex flex-col gap-2">
                <img src="{{asset('images/nike/home/football-one.jpg')}}" alt="football-one" class="object-cover md:h-[30rem] h-96 xl:h-full xl:w-full rounded" />
                <a href="" class="text-center text-lg font-medium">
                    Football Gear
                </a>
            </div>
            <div class="flex flex-col gap-2">
                <img src="{{asset('images/nike/home/golf-one.jpg')}}" alt="golf-one" class="object-cover md:h-[30rem] h-96 xl:h-full xl:w-full rounded" />
                <a href="" class="text-center text-lg font-medium">
                    Golf Gear
                </a>
            </div>
            <div class="flex flex-col gap-2">
                <img src="{{asset('images/nike/home/baseball-one.jpg')}}" alt="baseball-one" class="object-cover md:h-[30rem] h-96 xl:h-full xl:w-full rounded" />
                <a href="" class="text-center text-lg font-medium">
                    Baseball Gear
                </a>
            </div>

        </div>

    </div>

    <div class="flex flex-col lg:px-10 px-5 lg:gap-10 gap-5">

        <h2 class="md:text-3xl text-xl font-medium">
            Super Bowl LVII
        </h2>

        <div class="">
            <img src="{{asset('images/nike/home/superbowl-one.jpg')}}" alt="superbowl-one" class="object-cover w-full md:h-full h-96 rounded 2xl:h-[60rem]" />
        </div>
        <div class="flex flex-col gap-5 lg:items-center">
            <h2>
                <a href="" class="text-6xl font-bold tracking-tight">
                    NEVER DONE
                </a>
            </h2>

            <p class="">
                Get readdy for the biggest show in gridiron
            </p>

            <a href="" class="rounded-full px-5 py-2 bg-black text-white hover:bg-indigo-700 w-fit">
                Shop
            </a>
        </div>
    </div>

    <div class="flex flex-col lg:px-10 px-5 lg:gap-10 gap-5">

        <h2 class="md:text-3xl text-xl font-medium">
            Trending Now
        </h2>

        <div class="">
            <img src="{{asset('images/nike/home/trending-one.jpg')}}" alt="trending-one" class="w-full object-cover h-96 md:h-[35rem] lg:h-[45rem] xl:h-[50rem] rounded" />
        </div>
        <div class="flex flex-col gap-5 lg:items-center">
            <h1>
                <a href="" class="text-6xl font-bold tracking-tighter">
                    THE SWOOSH GOES RUNAWAY
                </a>
            </h1>

            <p class="">
                Shop pieces from bold designers in New York, Loving !
            </p>
        </div>

        <div class="flex flex-col md:flex-row gap-2 items-start lg:justify-center">

            <a href="" class="rounded-full px-5 py-2 bg-black text-white hover:bg-yellow-700">
                Shop Runaway Looks
            </a>
        </div>
    </div>

    <div class="flex flex-col lg:px-10 px-5 lg:gap-10 gap-5 my-10">

        <div class="flex justify-between items-center">
            <h2 class="md:text-3xl text-xl font-medium">
                Popular Right Now
            </h2>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
            </svg>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-5 lg:gap-10 pb-5">

            <div class="flex flex-col gap-2">
                <img src="{{asset('images/nike/home/shoes-two.jpg')}}" alt="shoes-two" class="object-cover h-96 md:h-[25rem] rounded" />
                <div class="flex flex-col px-5">
                    <a href="" class="text-lg font-medium">
                        Nike Air Max
                    </a>
                    <p class="text-slate-500 text-sm">
                        Kids Shoes
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <img src="{{asset('images/nike/home/shoes-three.jpg')}}" alt="shoes-three" class="object-cover h-96 md:h-[25rem] rounded" />
                <div class="flex flex-col px-5">
                    <a href="" class="text-lg font-medium">
                        Nike Air Jordan
                    </a>
                    <p class="text-slate-500 text-sm">
                        Mens Shoes
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <img src="{{asset('images/nike/home/shoes-four.jpg')}}" alt="shoes-four" class="object-cover h-96 md:h-[25rem] rounded" />
                <div class="flex flex-col px-5">
                    <a href="" class="text-lg font-medium">
                        Nike Max Jordan
                    </a>
                    <p class="text-slate-500 text-sm">
                        Sport Shoes
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="flex flex-col lg:px-10 px-5 lg:gap-10 gap-5">

        <h2 class="md:text-3xl text-xl font-medium">
            Statement Yoga Collection
        </h2>

        <div class="">
            <img src="{{asset('images/nike/home/yoga-one.jpg')}}" alt="yoga-one" class="w-full object-cover h-96 md:h-[35rem] lg:h-[45rem] xl:h-[50rem] rounded" />
        </div>
        <div class="flex flex-col gap-5 lg:items-center">
            <h1>
                <a href="" class="text-6xl font-bold tracking-tighter">
                    REACH FUTRTHER
                </a>
            </h1>

            <p class="">
                Elevate your energy in yoga pieces that move and breathe with you.
            </p>
        </div>

        <div class="flex flex-col md:flex-row gap-2 items-start lg:justify-center">

            <a href="" class="rounded-full px-5 py-2 bg-black text-white hover:bg-orange-700">
                Shop Men's Yoga
            </a>

            <a href="" class="rounded-full px-5 py-2 bg-black text-white hover:bg-orange-700">
                Shop Women's Yoga
            </a>
        </div>
    </div>

    <div class="flex flex-col lg:px-10 px-5 lg:gap-10 gap-5">

        <h2 class="md:text-3xl text-xl font-medium">
            2023 BHM Collection
        </h2>

        <div class="">
            <img src="{{asset('images/nike/home/bhm-one.jpg')}}" alt="bhm-one" class="w-full object-cover h-96 md:h-[35rem] lg:h-[45rem] xl:h-[50rem] rounded" />
        </div>
        <div class="flex flex-col gap-5 lg:items-center">
            <h1>
                <a href="" class="text-6xl font-bold tracking-tighter">
                    NIKE BHM X PRINCESS AIR
                </a>
            </h1>

            <p class="">
                People love or hate, but Worth something !
            </p>
        </div>

        <div class="flex flex-col md:flex-row gap-2 items-start lg:justify-center">

            <a href="" class="rounded-full px-5 py-2 bg-black text-white hover:bg-sky-700">
                Stop Runnin, Be Someone
            </a>
        </div>
    </div>

    <div class="flex flex-col lg:px-10 px-5 lg:gap-10 gap-5 my-10">

        <div class="flex justify-between items-center">
            <h2 class="md:text-3xl text-xl font-medium">
                Popular Right Now
            </h2>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
            </svg>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            <div class="flex flex-col gap-2 relative">
                <img src="{{asset('images/nike/home/trail-one.jpg')}}" alt="trail-one" class="object-cover w-full h-96 2xl:h-[40rem] brightness-75" />
                <div class="flex flex-col px-5 absolute bottom-10 gap-2 items-start xl:left-10">
                    <a href="" class="xl:text-3xl text-2xl md:text-xl font-medium text-white backdrop-blur px-1 py-1.5">
                        Pegasus Trail 4 GORE-TEXT
                    </a>
                    <a href="" class="bg-black rounded-full px-5 py-2 text-white hover:bg-green-700">
                        Shop Nike Trail
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-2 relative">
                <img src="{{asset('images/nike/home/walk-one.jpg')}}" alt="walk-one" class="object-cover w-full h-96 2xl:h-[40rem] brightness-75" />
                <div class="flex flex-col px-5 absolute bottom-10 gap-2 items-start xl:left-10">
                    <a href="" class="xl:text-3xl text-2xl md:text-xl font-medium text-white backdrop-blur px-1 py-1.5">
                        Trooping Mountain Walks
                    </a>
                    <a href="" class="bg-black rounded-full px-5 py-2 text-white hover:bg-green-700">
                        Shop Montain Max
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-2 relative">
                <img src="{{asset('images/nike/home/style-one.jpg')}}" alt="style-one" class="object-cover w-full h-96 2xl:h-[40rem] brightness-75" />
                <div class="flex flex-col px-5 absolute bottom-10 gap-2 items-start xl:left-10">
                    <a href="" class="xl:text-3xl text-2xl md:text-xl font-medium text-white backdrop-blur px-1 py-1.5">
                        Fly With Air
                    </a>
                    <a href="" class="bg-black rounded-full px-5 py-2 text-white hover:bg-green-700">
                        Shop Air Max
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="lg:w-3/4 lg:mx-auto my-10">

        <div class="flex flex-col items-center py-10 px-5 gap-8">

            <div class="flex items-center justify-center w-full relative">

                <img src="{{asset('images/nike/nike-logo.png')}}" alt="nike-logo" class="w-16" />

                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-10 h-10 absolute right-0">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg> -->

            </div>

            <h1 class="font-medium text-2xl">
                BE THE FIRST TO KNOW
            </h1>

            <p class="text-slate-500 text-center">
                Sign up for Nike emails to be the first to see inspiring content, news and exclusive offers.
            </p>

            <div class="flex flex-col gap-3 w-5/6">

                <div class="flex flex-col gap-1">
                    <label htmlFor="email" class="tracking-tight">
                        Email Address
                    </label>
                    <input id="email" type="email" class="px-5 py-2 rounded border placeholder:text-neutral-400 outline-none" placeholder="Email Address" />
                </div>

                <div class="flex flex-col gap-1">
                    <label htmlFor="date" class="tracking-tight">
                        Date Of Birth
                    </label>
                    <input type="date" id="date" class="px-5 py-2 rounded border text-neutral-400 outline-none" />
                </div>

                <div class="flex flex-col gap-1">
                    <label class="tracking-tight">
                        Shopping Preference
                    </label>
                    <select name="shop" class="px-5 py-2 rounded border  text-neutral-400 outline-none">
                        <option value="Choose" selected>
                            Choose
                        </option>
                        <option value="Men">
                            Men's
                        </option>
                        <option value="Women">
                            Women's
                        </option>
                    </select>
                </div>

            </div>

            <a href="" class="bg-black text-white font-medium text-center py-2 rounded w-5/6 md:w-fit px-5">
                Sign Up
            </a>

            <p class="text-slate-500 text-center text-sm">
                By signing up, you agree to Nike's&nbsp;
                <a href="" class="underline text-slate-700 text-sm">
                    Privacy Policy
                </a>
                &nbsp;and&nbsp;
                <a href="" class="underline text-slate-700 text-sm">
                    Terms of Use
                </a>
            </p>

        </div>

    </div>

    <div class="border items-center relative justify-center py-5 hidden">
        <h1 class="text-2xl font-medium absolute left-9">
            Men
        </h1>
        <div class="flex gap-5 text-lg tracking-tight">
            <a href="">Shoes</a>
            <a href="">Clothes</a>
            <a href="">Accessory</a>
            <a href="">Sale</a>
        </div>
    </div>

    <div class="mt-8 ml-16 mr-16 gap-12 hidden">
        <img src="" alt="" class="max-w-screen-md h-auto" />

        <img src="" alt="" class="max-w-md object-cover mt-20 mb-20 " />
    </div>

    <footer class="bg-black">
        <div class="2xl:container 2xl:mx-auto flex flex-col gap-10 p-10 text-white/75 text-sm tracking-tight">
            <div class="flex flex-col md:flex-row justify-between gap-10">
                <div class="flex flex-col md:flex-row gap-10 lg:gap-20">
                    <div class="flex flex-col gap-5 font-bold text-white">
                        <a href="">
                            GIFT CARDS
                        </a>
                        <a href="">
                            PROMOTIONS
                        </a>
                        <a href="">
                            FIND A STORE
                        </a>
                        <a href="">
                            SIGN UP FOR EMAIL
                        </a>
                        <a href="">
                            BECOME A MEMBER
                        </a>
                        <a href="">
                            NIKE JOURNAL
                        </a>
                        <a href="">
                            SEND US FEEDBACK
                        </a>
                    </div>
                    <div class="flex flex-col gap-5">
                        <a href="" class="font-bold text-white">
                            GET HELP
                        </a>
                        <a href="">
                            Order Status
                        </a>
                        <a href="">
                            Shipping And Delivery
                        </a>
                        <a href="">
                            Returns
                        </a>
                        <a href="">
                            Payment Options
                        </a>
                        <a href="">
                            Gift Card Balance
                        </a>
                        <a href="">
                            Contact Us
                        </a>
                    </div>
                    <div class="flex flex-col gap-5 ">
                        <a href="" class="font-bold text-white">
                            ABOUT NIKE
                        </a>
                        <a href="">
                            News
                        </a>
                        <a href="">
                            Careers
                        </a>
                        <a href="">
                            Investors
                        </a>
                        <a href="">
                            Purpose
                        </a>
                        <a href="">
                            Sustainability
                        </a>
                    </div>
                </div>
                <div class="flex items-start gap-5">
                    <a href="" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-8 h-8 rounded-full p-1 stroke-black bg-white/75 hover:bg-white">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </a>
                    <a href="" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-8 h-8 rounded-full p-1 stroke-black bg-white/75 hover:bg-white">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </a>
                    <a href="" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-8 h-8 rounded-full p-1 stroke-black bg-white/75 hover:bg-white">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between text-gray-400">
                <div class="flex flex-col gap-5">
                    <a href="" class="flex gap-2 items-center hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                        </svg>
                        <p>Pakistan</p>
                    </a>
                    <p class="">
                        &copy; 2023 Nike, Inc. All Right Reserved
                    </p>
                </div>
                <div class="flex flex-col md:flex-row gap-5">
                    <a href="">
                        Guides
                    </a>
                    <a href="">
                        Terms Of Sale
                    </a>
                    <a href="">
                        Terms Of Use
                    </a>
                    <a href="">
                        Nike Privacy Policy
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        let nikeMenu = document.querySelector('#nike-menu');
        let nikeMenuBtn = document.querySelector('#nike-menu-btn');
        nikeMenuBtn.addEventListener('click', () => {
            nikeMenu.classList.toggle('hidden')
            nikeMenu.classList.toggle('flex')
        })
    </script>

</body>

</html>