@extends('bank.layout')
@section('content')
<main class="flex flex-col">

    <section class="flex flex-col lg:flex-row gap-5 lg:gap-2 horizontal-alignment">
        <div class="lg:w-2/3 relative">
            <img src="{{asset('images/bank/slider-image-one.jpg')}}" alt="slider-image-one" class="w-full h-[500px] lg:h-[550px] object-cover rounded">
            <div class="absolute left-0 top-0 w-full h-full flex flex-col items-start justify-end rounded gap-4 lg:gap-8 px-4 py-4 md:px-10 md:py-10 lg:px-12 lg:py-12 xl:px-16 xl:py-16 bg-black/20">
                <div class="flex flex-col gap-2 lg:gap-4 text-white">
                    <h2 class="text-extra-large">Cheers to better banking this year</h2>
                    <h3 class="text-large">Make 2024 "the year I switched"</h3>
                </div>
                <button class="sky-btn-medium">MT. ADAMS BENEFITS CHECKING - FOR EVERY STAGE OF LIFE</button>
            </div>
        </div>
        <div class="lg:w-1/3 flex flex-col gap-4 lg:gap-8 py-6 px-5 lg:px-7 bg-gradient-to-br from-rb-blue to-rb-blue-light rounded items-center justify-center">
            <img src="{{asset('images/bank/award-one.png')}}" alt="award-one" class="w-full max-w-80">
            <div class="flex flex-col gap-1 text-center text-white">
                <h2 class="text-xl">Bauer Financial 5 Star Rating</h2>
                <p class="text-lg">Peace of Mind Matters</p>
            </div>
            <button class="sky-btn-small">MORE ABOUT BAUER</button>
        </div>
    </section>

    <section class="flex flex-col md:flex-row-reverse items-center gap-5 py-10 horizontal-alignment">
        <img src="{{asset('images/bank/bubbles-on-dock.jpg')}}" alt="bubbles-on-dock" class="rounded h-96 w-full md:h-[570px] md:w-1/2 object-cover md:object-right">
        <div class="md:w-1/2 flex flex-col gap-4 text-rb-blue">
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
    </section>

    <section class="flex flex-col items-center gap-5 py-10 horizontal-alignment">
        <div class="flex flex-col gap-2 text-rb-blue text-center">
            <h2 class="text-extra-large">
                What can we help you with today?
            </h2>
            <h3 class="text-large">
                Business and Personal banking that makes sense for you.
            </h3>
        </div>

        <hr class="w-full md:w-5/6 lg:w-4/6">

        <div class="flex flex-wrap justify-center md:justify-between w-full gap-5">

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

    <section class="flex flex-col relative h-[1500px] md:h-[1000px]">
        <img src="{{asset('images/bank/image-top.png')}}" alt="image-top" class="w-full object-contain absolute top-0 left-0">
        <img src="{{asset('images/bank/back-image-one.jpg')}}" alt="back-image-one" class="w-full h-full object-cover lg:object-left">
        <img src="{{asset('images/bank/image-bottom.png')}}" alt="image-bottom" class="w-full object-contain object-top absolute bottom-0 left-0">

        <div class="flex flex-col justify-center md:pb-20 absolute left-0 top-0 w-full h-full gap-8 md:gap-16 horizontal-alignment">
            <div class="flex flex-col md:flex-row gap-5 md:gap-2 lg:gap-5">
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

            <div class="flex flex-col items-start gap-8 md:w-3/4">
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

    <section class="flex flex-col gap-10 md:gap-16 lg:gap-20 horizontal-alignment py-10">
        <div class="flex items-center gap-2">
            <img src="{{asset('images/bank/grid-image-one.jpg')}}" alt="grid-image-one" class="w-1/3 rounded">
            <div class="flex flex-col gap-2 w-1/3">
                <img src="{{asset('images/bank/grid-image-two.jpg')}}" alt="grid-image-two" class="rounded w-full">
                <img src="{{asset('images/bank/grid-image-three.jpg')}}" alt="grid-image-three" class="rounded w-full">
            </div>
            <img src="{{asset('images/bank/grid-image-four.jpg')}}" alt="grid-image-four" class="w-1/3 rounded">
        </div>

        <div class="flex flex-col gap-4 items-center text-center">
            <h2 class="text-extra-large text-rb-blue">"WE HAVE GOT YOU"</h2>
            <h3 class="text-large w-3/4">No matter where you're at on your journey, we can help you navigate your financial needs. All of our services are designed around you</h3>
        </div>
    </section>

    <section class="flex flex-col relative">
        <img src="{{asset('images/bank/image-top.png')}}" alt="image-top" class="w-full object-contain absolute top-0 left-0">

        <div class="flex flex-col md:flex-row gap-10 pb-10 pt-20 md:pt-32 lg:pt-44 horizontal-alignment bg-slate-200 items-center">
            <img src="{{asset('images/bank/retirement-investment.jpg')}}" alt="retirement-investment" class="rounded h-96 object-top w-full md:h-[470px] md:w-1/2 object-cover">

            <div class="flex flex-col items-start gap-4 md:gap-6 md:w-1/2">
                <h2 class="text-extra-large">Investing that makes sense</h2>
                <h3 class="text-large">
                    It all starts with understanding your full financial picture, what drives you, and how you want to live your life. Let's build a strategy to make your dreams come true
                </h3>
                <button class="blue-btn-small">LEARN MORE ABOUT INVESTING WITH RIVERVIEW BANK</button>
            </div>
        </div>
    </section>

    <section class="flex relative bg-slate-200 h-[900px] md:h-[800px] lg:h-[900px]">
        <img src="{{asset('images/bank/mountain-placeholder.png')}}" alt="mountain-placeholder" class="w-full h-full object-cover object-right-top">
        <img src="{{asset('images/bank/body-footer-placeholder.png')}}" alt="body-footer-placeholder" class="w-full absolute bottom-0 left-0 object-contain">

        <div class="absolute left-0 top-0 flex flex-col w-full h-full items-center justify-center md:flex-row gap-10 horizontal-alignment ">
            <div class="flex flex-col gap-6 items-center md:w-1/2">
                <img src="{{asset('images/bank/location-mark-white.png')}}" alt="location-mark-white" class="w-36">
                <div class="flex flex-col gap-4 text-center text-white">
                    <h2 class="text-extra-large">Local Bank</h2>
                    <h3 class="text-large">Keeping your money in your community just makes good sense</h3>
                </div>
                <button class="sky-btn-small">TALK TO US TODAY</button>
            </div>

            <div class="flex flex-col gap-6 items-center md:w-1/2">
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