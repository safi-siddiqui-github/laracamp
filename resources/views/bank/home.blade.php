@extends('bank.layout')
@section('content')
<main class="flex flex-col gap-20 pt-10">

    <section class="flex gap-5">
        <div class="w-2/3 relative">
            <img src="{{asset('images/bank/slider-image-one.jpg')}}" alt="slider-image-one" class="w-full h-full object-cover rounded">
            <div class="flex flex-col gap-8 absolute left-0 top-0 items-start justify-end w-full h-full rounded pb-20 pl-16 bg-black/20">
                <div class="flex flex-col gap-4 text-white">
                    <h2 class="text-extra-large">Cheers to better banking this year</h2>
                    <h3 class="text-large">Make 2024 "the year I switched"</h3>
                </div>
                <button class="sky-btn-medium">MT. ADAMS BENEFITS CHECKING - FOR EVERY STAGE OF LIFE</button>
            </div>
        </div>

        <div class="w-1/3 flex flex-col xl:gap-4 xl:py-10 xl:px-14 gap-1 py-6 px-10 bg-gradient-to-br from-rb-blue to-rb-blue-light rounded items-center">
            <img src="{{asset('images/bank/award-one.png')}}" alt="award-one">
            <div class="flex flex-col gap-1 text-center text-white">
                <h2 class="text-xl">Bauer Financial 5 Star Rating</h2>
                <p class="text-lg">Peace of Mind Matters</p>
            </div>
            <button class="sky-btn-small">MORE ABOUT BAUER</button>
        </div>
    </section>

    <section class="flex items-center gap-10 px-20">
        <div class="w-1/2 flex flex-col gap-4 text-rb-blue">
            <h2 class="text-extra-large">
                Explore Riverview Bank Services and Solutions — It's about you
            </h2>
            <h3 class="text-large">
                At Riverview Bank, we're not just banking experts; we're in the business of building strong, thriving communities
            </h3>
            <p class="text-medium">
                At Riverview Bank, our foundation thrives on nurturing meaningful relationships and fostering enduring connections with individuals like you. For over a century, we've cherished these bonds, knowing they're integral to our identity and success. Explore our range of services including online banking, business loans, high yield savings, and refi loans, and experience the difference today
            </p>
        </div>
        <img src="{{asset('images/bank/bubbles-on-dock.jpg')}}" alt="bubbles-on-dock" class="rounded h-[570px] w-1/2 object-cover">
    </section>

    <section class="flex flex-col items-center gap-10 px-20">
        <div class="flex flex-col gap-2 text-rb-blue text-center">
            <h2 class="text-extra-large">
                What can we help you with today?
            </h2>
            <h3 class="text-large">
                Business and Personal banking that makes sense for you.
            </h3>
        </div>

        <hr class="w-4/6">

        <div class="flex justify-between w-full gap-5">
            <div class="flex flex-col gap-5 items-center group">
                <div class="rounded-full p-5 shadow group-hover:shadow-rb-blue-light">
                    <img src="{{asset('images/bank/location-mark.jpg')}}" alt="location-mark" class="w-14">
                </div>
                <a href="#" class="text-rb-blue-light text-sm underline hover:no-underline hover:text-rb-blue font-medium tracking-wide">LOCATIONS</a>
            </div>
            <div class="flex flex-col gap-5 items-center group">
                <div class="rounded-full p-5 shadow group-hover:shadow-rb-blue-light">
                    <img src="{{asset('images/bank/message-icon.jpg')}}" alt="message-icon" class="w-14">
                </div>
                <a href="#" class="text-rb-blue-light text-sm underline hover:no-underline hover:text-rb-blue font-medium tracking-wide">CONTACT US</a>
            </div>
            <div class="flex flex-col gap-5 items-center group">
                <div class="rounded-full p-5 shadow group-hover:shadow-rb-blue-light">
                    <img src="{{asset('images/bank/cheque-icon.jpg')}}" alt="cheque-icon" class="w-14">
                </div>
                <a href="#" class="text-rb-blue-light text-sm underline hover:no-underline hover:text-rb-blue font-medium tracking-wide">PERSONAL CHECKING</a>
            </div>
            <div class="flex flex-col gap-5 items-center group">
                <div class="rounded-full p-5 shadow group-hover:shadow-rb-blue-light">
                    <img src="{{asset('images/bank/location-mark.jpg')}}" alt="location-mark" class="w-14">
                </div>
                <a href="#" class="text-rb-blue-light text-sm underline hover:no-underline hover:text-rb-blue font-medium tracking-wide">PERSONAL SAVINGS</a>
            </div>
            <div class="flex flex-col gap-5 items-center group">
                <div class="rounded-full p-5 shadow group-hover:shadow-rb-blue-light">
                    <img src="{{asset('images/bank/cheque-icon.jpg')}}" alt="cheque-icon" class="w-14">
                </div>
                <a href="#" class="text-rb-blue-light text-sm underline hover:no-underline hover:text-rb-blue font-medium tracking-wide">BUSINESS CHECKING</a>
            </div>
            <div class="flex flex-col gap-5 items-center group">
                <div class="rounded-full p-5 shadow group-hover:shadow-rb-blue-light">
                    <img src="{{asset('images/bank/message-icon.jpg')}}" alt="message-icon" class="w-14">
                </div>
                <a href="#" class="text-rb-blue-light text-sm underline hover:no-underline hover:text-rb-blue font-medium tracking-wide">BUSINESS SAVINGS</a>
            </div>
        </div>
    </section>

    <section class="flex flex-col relative h-[1000px]">
        <img src="{{asset('images/bank/image-top.png')}}" alt="image-top" class="w-full object-contain absolute top-0 left-0">
        <img src="{{asset('images/bank/back-image-one.jpg')}}" alt="back-image-one" class="w-full h-full object-cover object-left">
        <img src="{{asset('images/bank/image-bottom.png')}}" alt="image-bottom" class="w-full object-contain object-top absolute bottom-0 left-0">

        <div class="flex flex-col absolute left-0 top-0 w-full h-full gap-32 px-20">
            <div class="flex gap-5">
                <div class="h-72 relative rounded-lg overflow-hidden">
                    <img src="{{asset('images/bank/life-community.jpg')}}" alt="life-community" class="w-full h-full object-cover object-top">
                    <div class="flex absolute top-0 left-0 bg-black/30 hover:bg-black/40 text-white w-full h-full items-end justify-center pb-10">
                        <a href="#" class="text-large underline hover:no-underline">Your Life</a>
                    </div>
                </div>
                <div class="h-72 relative rounded-lg overflow-hidden">
                    <img src="{{asset('images/bank/business-community.jpg')}}" alt="business-community" class="w-full h-full object-cover object-top">
                    <div class="flex absolute top-0 left-0 bg-black/30 hover:bg-black/40 text-white w-full h-full items-end justify-center pb-10">
                        <a href="#" class="text-large underline hover:no-underline">Your business</a>
                    </div>
                </div>
                <div class="h-72 relative rounded-lg overflow-hidden">
                    <img src="{{asset('images/bank/family-community.jpg')}}" alt="family-community" class="w-full h-full object-cover object-top">
                    <div class="flex absolute top-0 left-0 bg-black/30 hover:bg-black/40 text-white w-full h-full items-end justify-center pb-10">
                        <a href="#" class="text-large underline hover:no-underline">Your family</a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-start gap-8 w-3/4">
                <div class="flex flex-col gap-4 text-white">
                    <h2 class="text-extra-large">There's no place like home</h2>
                    <h3 class="text-large">We are a true partner in our communities by ensuring people feel seen, heard, and valued</h3>
                    <p class="text-medium">
                        We move beyond the transactional-based experience to foster relationships with genuine care and exceptional service
                    </p>
                </div>
                <button class="sky-btn-medium">SEE HOW WE MAKE A DIFFERENCE IN COMMUNITES WE SERVE</button>
            </div>
        </div>
    </section>

    <section class="flex flex-col gap-20 px-20">
        <div class="flex items-center gap-5">
            <img src="{{asset('images/bank/grid-image-one.jpg')}}" alt="grid-image-one" class="w-1/3 rounded">
            <div class="flex flex-col gap-5 w-1/3">
                <img src="{{asset('images/bank/grid-image-two.jpg')}}" alt="grid-image-two" class="rounded">
                <img src="{{asset('images/bank/grid-image-three.jpg')}}" alt="grid-image-three" class="rounded">
            </div>
            <img src="{{asset('images/bank/grid-image-four.jpg')}}" alt="grid-image-four" class="w-1/3 rounded">
        </div>

        <div class="flex flex-col gap-4 text-center">
            <h2 class="text-extra-large text-rb-blue">"WE HAVE GOT YOU"</h2>
            <h3 class="text-large">No matter where you're at on your journey, we can help you navigate your financial needs. All of our services are designed around you</h3>
        </div>
    </section>

    <section class="flex flex-col relative">
        <img src="{{asset('images/bank/image-top.png')}}" alt="image-top" class="w-full object-contain absolute top-0 left-0">

        <div class="flex gap-10 px-20 pt-44 pb-5 bg-neutral-200 items-center">
            <img src="{{asset('images/bank/retirement-investment.jpg')}}" alt="retirement-investment" class="w-1/2 object-contain rounded">

            <div class="flex flex-col items-start gap-8 w-1/2">
                <h2 class="text-extra-large">Investing that makes sense</h2>
                <h3 class="text-large">
                    It all starts with understanding your full financial picture, what drives you, and how you want to live your life. Let's build a strategy to make your dreams come true
                </h3>
                <button class="blue-btn-small">LEARN MORE ABOUT INVESTING WITH RIVERVIEW BANK</button>
            </div>
        </div>
    </section>

    <section class="flex relative">
        <img src="{{asset('images/bank/mountain-placeholder.png')}}" alt="mountain-placeholder" class="w-full object-contain">
        <img src="{{asset('images/bank/body-footer-placeholder.png')}}" alt="body-footer-placeholder" class="w-full absolute bottom-0 left-0 object-contain">

        <div class="absolute left-0 bottom-0 flex gap-10 px-20 pb-36">
            <div class="flex flex-col gap-6 items-center w-1/2">
                <img src="{{asset('images/bank/location-mark-white.png')}}" alt="location-mark-white" class="w-36">
                <div class="flex flex-col gap-4 text-center text-white">
                    <h2 class="text-extra-large">Local Bank</h2>
                    <h3 class="text-large">Keeping your money in your community just makes good sense</h3>
                </div>
                <button class="sky-btn-small">TALK TO US TODAY</button>
            </div>

            <div class="flex flex-col gap-6 items-center w-1/2">
                <img src="{{asset('images/bank/award-one-white.png')}}" alt="award-one-white" class="w-36">
                <div class="flex flex-col gap-4 text-center text-white">
                    <h2 class="text-extra-large">Bauer Financial</h2>
                    <h3 class="text-large">Excellent 5-Star Expert Rating by Official Bauer Financial</h3>
                </div>
                <button class="sky-btn-small">LEARN ABOUT OUR SUPERIOR RATING</button>
            </div>
        </div>
    </section>

</main>
@endsection