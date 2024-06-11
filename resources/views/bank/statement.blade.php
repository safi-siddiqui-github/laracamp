@extends('bank.dashboard-layout')
@section('content')
<main class="flex flex-col w-full">
    <div class="p-5 md:p-10 flex flex-col gap-5 md:gap-10 bg-rb-yellow-light border-b-4 border-rb-yellow-light-border">
        <h1 class="text-extra-large text-rb-green font-bold">Accounts</h1>

        <div class="flex flex-col gap-2 font-medium text-sm">
            <p class="">Checking & Savings</p>

            <div class="flex gap-10">
                <div class="flex flex-col gap-2">
                    <p class="text-neutral-500">Available balance</p>
                    <p class="text-4xl">$0.00</p>
                </div>

                <div class="flex flex-col gap-2 font-medium text-sm">
                    <p class="text-neutral-500">Total balance</p>
                    <p class="text-2xl">$0.00</p>
                </div>
            </div>
        </div>

    </div>

    <div class="md:p-5 flex flex-col gap-10 bg-rb-yellow-light-back">

        <div class="flex flex-col border-2 divide-y divide-rb-yellow-light-border border-rb-yellow-light-border rounded overflow-x-scroll scrollbar">

            <button class="flex items-center gap-1 px-4 py-3 font-medium text-rb-green text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 7C3 6.44772 3.44772 6 4 6H20C20.5523 6 21 6.44772 21 7C21 7.55228 20.5523 8 20 8H4C3.44772 8 3 7.55228 3 7ZM6 12C6 11.4477 6.44772 11 7 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H7C6.44772 13 6 12.5523 6 12ZM9 17C9 16.4477 9.44772 16 10 16H14C14.5523 16 15 16.4477 15 17C15 17.5523 14.5523 18 14 18H10C9.44772 18 9 17.5523 9 17Z" fill="currentColor" />
                </svg>
                <span>Filter</span>
            </button>

            <div class="flex items-center gap-2 px-4 py-3 font-medium text-rb-green text-sm">
                <input type="checkbox" value="" name="name" id="name" class="w-6 h-6 border border-rb-green accent-rb-green bg-white rounded  checked:accent-rb-green indeterminate:bg-rb-green">
                <p class="">Name</p>
            </div>

            @foreach($months as $month)

            <div class="flex items-center gap-2 px-4 py-3 font-medium text-rb-green text-sm">
                <input type="checkbox" value="" name="name" id="name" class="w-6 h-6 border border-rb-green accent-rb-green bg-white rounded  checked:accent-rb-green indeterminate:bg-rb-green">
                <p class="">{{$month}}</p>
            </div>

            @endforeach

        </div>

    </div>
</main>
@endsection