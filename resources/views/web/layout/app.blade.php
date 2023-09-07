<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/x-icon">
        <!-- <meta name="description" content="Laracamp - Web Designer And Developer"> -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('head')
        @livewireStyles
    </head>
    <body class="antialiased">
        
        <header class="flex flex-col gap-5 px-5 py-3 border-b" x-data="{
            open: false,
            toggle() {this.open = !this.open}
                }">
            <div class="flex justify-between">

                <nav class="flex">
                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Laracamp
                    </a>
                </nav>

                <nav class="hidden md:flex gap-2">
            
                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Store
                    </a>

                    @auth
                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Cart
                    </a>
                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Order
                    </a>
                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Profile
                    </a>
                    @endauth
                    
                </nav>
                
                <nav class="gap-2 hidden md:flex">
                    
                    @guest
                    <a href="{{route('web.login')}}" class="@if(url()->current() == route('web.login')) font-medium @endif">
                        Login
                    </a>
                    <a href="{{route('web.register')}}" class="@if(url()->current() == route('web.register')) font-medium @endif">
                        Register
                    </a>
                    @endguest

                    @auth
                    <livewire:web.auth.logout />
                    @endauth
                    
                </nav>
                
                <button class="md:hidden" @click="toggle()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

            </div>

            <aside class="flex flex-col md:hidden" x-show="open" x-transition>

                <div class="flex flex-col gap-1 py-2">

                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Store
                    </a>

                    @auth
                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Cart
                    </a>
                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Order
                    </a>
                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Profile
                    </a>
                    @endauth

                </div>
                
                <div class="flex gap-1 flex-col border-t py-2">
                    
                    @guest
                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Login
                    </a>
                    <a href="{{route('web.home')}}" class="@if(url()->current() == route('web.home')) font-medium @endif">
                        Register
                    </a>
                    @endguest
                    
                    @auth
                    <livewire:web.auth.logout />
                    @endauth
                </div>
            </aside>

        </header>
    
        @yield('content')

    <footer class="flex flex-col md:px-10 px-5">

        <section class="flex flex-col xl:flex-row xl:items-center gap-10 py-10 border-t">

            <aside class="flex flex-wrap gap-5 md:justify-between justify-around w-full text-slate-500">

                <nav class="flex flex-col gap-3">
                    <p class="font-medium text-black text-lg">Store</p>
                    <a href="#" class="hover:text-black">New Arrivals</a>
                    <a href="#" class="hover:text-black">Featured</a>
                    <a href="#" class="hover:text-black">Best Sold</a>
                    <a href="#" class="hover:text-black">Loved Ones</a>
                    <a href="#" class="hover:text-black">Best Budget</a>
                </nav>

                <nav class="flex flex-col gap-3">
                    <p class="font-medium text-black text-lg">Category</p>
                    <a href="#" class="hover:text-black">Cars</a>
                    <a href="#" class="hover:text-black">Clothes</a>
                    <a href="#" class="hover:text-black">Boats</a>
                    <a href="#" class="hover:text-black">Houses</a>
                    <a href="#" class="hover:text-black">Shoes</a>
                </nav>

                <nav class="flex flex-col gap-3">
                    <p class="font-medium text-black text-lg">Technology</p>
                    <a href="#" class="hover:text-black">Phone</a>
                    <a href="#" class="hover:text-black">Laptop</a>
                    <a href="#" class="hover:text-black">Screens</a>
                    <a href="#" class="hover:text-black">Headphones</a>
                    <a href="#" class="hover:text-black">Speakers</a>
                </nav>

                <nav class="flex flex-col gap-3">
                    <p class="font-medium text-black text-lg">Courses</p>
                    <a href="#" class="hover:text-black">Top Skills</a>
                    <a href="#" class="hover:text-black">Instructors</a>
                    <a href="#" class="hover:text-black">Pricing</a>
                    <a href="#" class="hover:text-black">Dashboard</a>
                    <a href="#" class="hover:text-black">Profile</a>
                </nav>

                <nav class="flex flex-col gap-3">
                    <p class="font-medium text-black text-lg">Jobs</p>
                    <a href="#" class="hover:text-black">Expensive</a>
                    <a href="#" class="hover:text-black">Popular</a>
                    <a href="#" class="hover:text-black">Most Bids</a>
                    <a href="#" class="hover:text-black">Fixed</a>
                    <a href="#" class="hover:text-black">Hourly</a>
                </nav>

                <nav class="flex flex-col gap-3">
                    <p class="font-medium text-black text-lg">Laracmap</p>
                    <a href="#" class="hover:text-black">Services</a>
                    <a href="#" class="hover:text-black">About</a>
                    <a href="#" class="hover:text-black">Legal</a>
                    <a href="#" class="hover:text-black">Contracts</a>
                    <a href="#" class="hover:text-black">Company</a>
                </nav>

            </aside>
            
            <livewire:web.newsletter-component />
            
        </section>

        <section class="flex md:flex-row flex-col-reverse justify-between items-center gap-5 py-10 border-t">

            <p class="text-slate-500 text-center" x-data="{year: new Date().getFullYear()}">
                &copy; <span x-text="year"></span> Laracamp, Inc. All rights reserved.
            </p>

            <aside class="flex gap-5 items-center">
                <img src="{{asset('storage/images/icons/facebook.png')}}" alt="Facebook Icon" class="w-8">
                <img src="{{asset('storage/images/icons/instagram.png')}}" alt="Instagram Icon" class="w-8">
                <img src="{{asset('storage/images/icons/twitter.png')}}" alt="Twitter Icon" class="w-8">
                <img src="{{asset('storage/images/icons/github.png')}}" alt="Github Icon" class="w-8">
                <img src="{{asset('storage/images/icons/youtube.png')}}" alt="Youtube Icon" class="w-8">
            </aside>
            
        </section>

    </footer>

        @livewireScripts
    </body>
</html>
