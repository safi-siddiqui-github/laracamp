<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/x-icon">
    <meta name="description" content="Laracamp - Web Designer And Developer">

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
                <a href="" class="">
                    Laracamp
                </a>
            </nav>

            <nav class="hidden md:flex gap-2">

                <a href="" class="">
                    Store
                </a>

                <a href="" class="">
                    Cart
                </a>
                <a href="" class="">
                    Order
                </a>
                <a href="" class="">
                    Profile
                </a>

            </nav>

            <nav class="gap-2 hidden md:flex">

                <a href="" class="">
                    Login
                </a>
                <a href="" class="">
                    Register
                </a>

                <form method="POST" wire:submit.prevent="logout">
                    <button class="font-medium">Logout</button>
                </form>

            </nav>

            <button class="md:hidden" @click="toggle()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>

        </div>

        <aside class="flex flex-col md:hidden" x-show="open" x-transition>

            <div class="flex flex-col gap-1 py-2">

                <a href="" class="">
                    Store
                </a>

                <a href="" class="">
                    Cart
                </a>
                <a href="" class="">
                    Order
                </a>
                <a href="" class="">
                    Profile
                </a>

            </div>

            <div class="flex gap-1 flex-col border-t py-2">

                <a href="" class="">
                    Login
                </a>
                <a href="" class="">
                    Register
                </a>
                
            </div>
        </aside>

    </header>

    <main class="w-full flex bg-white lg:items-center lg:py-5">

        <form wire:submit.prevent="login" class="flex flex-col p-5 md:p-10 gap-5 w-full">

            <div class="flex flex-col gap-3 mb-5">

                <h2 class="text-3xl font-bold">
                    Sign in to your account
                </h2>

                <div class="flex gap-3">

                    <p class="text-slate-500">
                        Not a member ?
                    </p>

                    <a href="" class="font-medium">
                        Create an account !
                    </a>
                </div>

            </div>

            <div class="flex flex-col gap-1">

                <label for="email" class="font-medium cursor-pointer">Email</label>

                <input wire:model.lazy="email" id="email" type="email" placeholder="john@gmail.com" class="border rounded px-4 py-2">

                @error('email') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="flex flex-col gap-1">

                <label for="password" class="font-medium cursor-pointer">Password</label>

                <input wire:model.lazy="password" id="password" type="password" placeholder="jo********mn" class="border rounded px-4 py-2">

                @error('password') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="flex gap-3 justify-between">

                <div class="flex gap-3 items-center">

                    <input type="checkbox" id="remember" wire:model.lazy="remember">

                    <label for="remember" class="cursor-pointer">
                        Remember me
                    </label>

                </div>

                <a href="#" class="font-medium">
                    Forgot password ?
                </a>

            </div>

            <div class="border rounded flex justify-center relative my-5">
                <p class="font-medium absolute top-[-0.8rem] bg-white px-5">
                    Or continue with
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 md:flex-wrap gap-3 md:justify-between">

                <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                    <img src="{{asset('storage/images/icons/google.png')}}" alt="Google Icon" class="w-7">
                    <span class="">Google</span>
                </button>

                <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                    <img src="{{asset('storage/images/icons/github.png')}}" alt="Github Icon" class="w-7">
                    <span class="">Github</span>
                </button>

                <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                    <img src="{{asset('storage/images/icons/twitter.png')}}" alt="Twitter Icon" class="w-7">
                    <span class="">Twitter</span>
                </button>

                <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                    <img src="{{asset('storage/images/icons/facebook.png')}}" alt="Facebook Icon" class="w-7">
                    <span class="">Facebook</span>
                </button>

            </div>

            <button type="submit" class="bg-black text-white text-center text-sm px-4 py-2 font-medium rounded">Login</button>

        </form>

        <img src="{{asset('storage/images/web/auth/login.jpg')}}" alt="Landing Login" class="hidden lg:block object-cover w-1/2 h-[50rem] rounded-tl-lg rounded-bl-lg">

    </main>

    <main class="w-full flex bg-white lg:items-center lg:py-5">

        <form wire:submit.prevent="register" class="flex flex-col p-5 md:p-10 gap-5 w-full">

            <div class="flex flex-col gap-3 mb-5">

                <h2 class="text-3xl font-bold">
                    Create your new account
                </h2>

                <div class="flex gap-3">

                    <p class="text-slate-500">
                        ALready a member ?
                    </p>

                    <a href="" class="font-medium">
                        Sign In !
                    </a>
                </div>

            </div>

            <div class="flex flex-col gap-1">

                <label for="email" class="font-medium cursor-pointer">Email</label>

                <input wire:model.lazy="email" id="email" type="email" placeholder="john@gmail.com" class="border rounded px-4 py-2">

                @error('email') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="flex flex-col gap-1">

                <label for="password" class="font-medium cursor-pointer">Password</label>

                <input wire:model.lazy="password" id="password" type="password" placeholder="jo********mn" class="border rounded px-4 py-2">

                @error('password') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="flex flex-col gap-1">

                <label for="password_confirmation" class="font-medium cursor-pointer">Password_confirmation</label>

                <input wire:model.lazy="password_confirmation" id="password_confirmation" type="password" placeholder="jo********mn" class="border rounded px-4 py-2">

            </div>
            @error('password_confirmation') <p class="text-red-500">{{$message}}</p> @enderror

            <div class="flex gap-3 justify-between">

                <div class="flex gap-3 items-center">

                    <input type="checkbox" id="remember" wire:model.lazy="remember">

                    <label for="remember" class="cursor-pointer">
                        Remember me
                    </label>

                </div>

                <a href="#" class="font-medium">
                    Forgot password ?
                </a>

            </div>

            <div class="border rounded flex justify-center relative my-5">
                <p class="font-medium absolute top-[-0.8rem] bg-white px-5">
                    Or continue with
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 md:flex-wrap gap-3 md:justify-between">

                <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                    <img src="{{asset('storage/images/icons/google.png')}}" alt="Google Icon" class="w-7">
                    <span class="">Google</span>
                </button>

                <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                    <img src="{{asset('storage/images/icons/github.png')}}" alt="Github Icon" class="w-7">
                    <span class="">Github</span>
                </button>

                <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                    <img src="{{asset('storage/images/icons/twitter.png')}}" alt="Twitter Icon" class="w-7">
                    <span class="">Twitter</span>
                </button>

                <button type="button" class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                    <img src="{{asset('storage/images/icons/facebook.png')}}" alt="Facebook Icon" class="w-7">
                    <span class="">Facebook</span>
                </button>

            </div>

            <button type="submit" class="bg-black text-white text-center text-sm px-4 py-2 font-medium rounded">Register</button>

        </form>

        <img src="{{asset('storage/images/web/auth/register.jpg')}}" alt="Landing Login" class="hidden lg:block object-cover w-1/2 h-[50rem] rounded-tl-lg rounded-bl-lg">

    </main>

    <section class="flex flex-col xl:flex-row lg:p-10 xl:px-0 xl:gap-10 items-center">

        <div class="flex flex-col gap-10 lg:gap-12 md:w-4/5 items-center  px-5 lg:px-10 py-20 md:py-32">

            <h1 class="text-4xl md:text-5xl lg:text-6xl text-center font-semibold md:font-bold tracking-tight">
                PHP Laravel, Intertia, Vue, Nuxt, React, Next and Tailwind CSS
            </h1>

            <p class="text-slate-500 md:w-4/5 text-center lg:text-2xl">
                Build your Application with the most Popular, Highly Scalable and Performant Frameworks
            </p>

            <div class="flex flex-col md:flex-row gap-5 items-center lg:text-lg">

                <a href="" class="bg-black text-white font-medium px-4 py-2 rounded">
                    About
                </a>

                <a href="" class="font-medium">
                    Hi there
                </a>

            </div>

        </div>

        <img src="{{asset('storage/images/web/home/home.jpg')}}" alt="" class="w-full hidden xl:block xl:h-[50rem] xl:w-2/5 object-cover rounded-lg xl:rounded-tr-none xl:rounded-br-none shadow-xl">

    </section>




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

            <aside class="flex flex-col gap-3 w-fit">

                <p class="font-medium">
                    Subscribe to our newsletter
                </p>

                <p class="text-slate-500">
                    The latest news, articles and resources sent to your inbox weekly.
                </p>

                <form wire:submit="save" class="flex flex-col md:flex-row gap-2 md:items-start">

                    <div class="flex flex-col">

                        <input type="email" class="rounded border px-4 py-3" placeholder="Enter your email" wire:model="email">

                        @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        @if (session('news_success'))
                        <span class="text-green-500">
                            {{ session('news_success') }}
                        </span>
                        @endif
                    </div>

                    <button type="submit" class="bg-black text-white py-3 px-5 font-medium rounded flex gap-3">
                        <span>
                            Subscribe
                        </span>
                        <svg wire:loading xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-spin w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>

                    </button>

                </form>

            </aside>

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