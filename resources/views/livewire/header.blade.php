<?php

use function Livewire\Volt\{state};

//

?>

<div class="flex px-10 pt-1 justify-between items-center">
    <a href="">
        <img src="{{secure_asset('images/logo.svg')}}" alt="logo" class="w-20 h-20">
    </a>

    <div class="">
        @auth
        <a href="{{route('logout')}}" class="rounded-full border pl-2 pr-4 py-1 flex items-center gap-1 hover:border-black">
            <img src="{{auth()->user()->avatar}}" alt="avatar" class="w-10 h-10 rounded-full">
            <span class="font-semibold">{{auth()->user()->name}}</span>
            <!-- <span>Sign Out</span> -->
            <span>Logout</span>
        </a>
        @else
        <a href="{{route('google_redirect')}}" class="rounded-full border pl-2 pr-4 py-1 flex items-center gap-1 hover:border-black">
            <img src="{{secure_asset('images/google.svg')}}" alt="google" class="w-10 h-10">
            <span>Continue with</span>
            <span class="font-semibold">Google</span>
        </a>
        @endauth
    </div>
</div>