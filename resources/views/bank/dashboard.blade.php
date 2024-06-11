@extends('bank.dashboard-layout')
@section('content')
<main class="flex flex-col w-full">
    <div class="p-5 md:p-10 flex flex-col gap-5 md:gap-10 bg-rb-yellow-light border-b-4 border-rb-yellow-light-border">
        <h1 class="text-extra-large text-rb-green font-bold">ADDICENT LLC</h1>
        <div class="flex flex-col gap-2 font-medium text-sm">
            <p class="">Checking & Savings</p>
            <p class="text-neutral-500">Total balance</p>
            <p class="text-4xl">$0.00</p>
        </div>

    </div>

    <div class="md:p-5 flex flex-col gap-10 bg-rb-yellow-light-back">

        <div class="flex flex-col border-2 divide-y divide-rb-yellow-light-border border-rb-yellow-light-border rounded overflow-x-scroll scrollbar">

            <div class="flex gap-10 px-4 py-3 font-medium items-center text-rb-green text-sm min-w-[540px]">
                <button class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 7C3 6.44772 3.44772 6 4 6H20C20.5523 6 21 6.44772 21 7C21 7.55228 20.5523 8 20 8H4C3.44772 8 3 7.55228 3 7ZM6 12C6 11.4477 6.44772 11 7 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H7C6.44772 13 6 12.5523 6 12ZM9 17C9 16.4477 9.44772 16 10 16H14C14.5523 16 15 16.4477 15 17C15 17.5523 14.5523 18 14 18H10C9.44772 18 9 17.5523 9 17Z" fill="currentColor" />
                    </svg>
                    <span>Filter</span>
                </button>

                <button class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                        <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Search</span>
                </button>
            </div>

            <div class="flex px-4 py-3 font-medium items-center text-rb-green text-sm min-w-[540px]">
                <p class="w-3/12">Name</p>
                <p class="w-2/12 text-center">Status</p>
                <p class="w-2/12 text-center">Date</p>
                <p class="w-3/12 text-center">Account</p>
                <p class="w-2/12 text-right">Amount</p>
            </div>

            @for($i=0;$i < 10;$i++)
            <div class="flex px-4 py-3 font-medium items-center min-w-[540px]">
                <div class="w-3/12 flex gap-2 lg:gap-4 items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-10 h-10 lg:w-12 lg:h-12" viewBox="-0.5 0 48 48" version="1.1">
                        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Color-" transform="translate(-401.000000, -860.000000)">
                                <g id="Google" transform="translate(401.000000, 860.000000)">
                                    <path d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24" id="Fill-1" fill="#FBBC05">

                                    </path>
                                    <path d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333" id="Fill-2" fill="#EB4335">

                                    </path>
                                    <path d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667" id="Fill-3" fill="#34A853">

                                    </path>
                                    <path d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24" id="Fill-4" fill="#4285F4">

                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <div class="flex flex-col">
                        <div class="font-medium text-sm lg:text-base">Google</div>
                        <div class="text-xs  text-black/70">Mastercard</div>
                    </div>

                </div>
                <div class="w-2/12 flex items-center justify-center">
                    <p class="bg-rb-peach text-xs xl:text-sm px-1.5 py-0.5 rounded-full font-medium">Cancelled</p>
                </div>
                <div class="w-2/12 flex items-center justify-center">
                    <p class="text-black/80 text-xs lg:text-sm xl:text-base">11 Feb, 2024</p>
                </div>
                <div class="w-3/12 flex flex-col items-center justify-center text-center">
                    <p class="text-sm">STRATEGIC TRADE CONSOLIDATED</p>
                    <p class="text-black/80 text-xs">ADDISON AMSDELL | 1766</p>
                </div>
                <div class="w-2/12 flex flex-col items-end justify-center">
                    <p class="font-medium text-rb-green">-$19.64</p>
                </div>
            </div>
            @endfor

        </div>

    </div>
</main>
@endsection