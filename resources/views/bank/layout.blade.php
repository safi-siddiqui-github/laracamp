<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/favicon.svg')}}" type="image/x-icon">
    <title>Larabank</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    <!-- Small Screen Header -->
    <header class="flex justify-between items-center px-4 py-4 md:px-10 relative lg:hidden z-10">

        <img src="{{asset('images/bank/bank-full-logo.svg')}}" alt="bank-full-logo" class="w-36">

        <div class="flex gap-2">
            <button id="toggle-search-menu-sm-screen" class="rounded-full p-3 bg-rb-blue-light">
                <img src="{{asset('images/bank/icons8-search-50-white.png')}}" alt="icons8-search-50-white" class="w-6 h-6">
            </button>
            <button id="open-menu-sm-screen" class="rounded-full p-3.5 bg-rb-blue">
                <img src="{{asset('images/bank/icons8-menu-26-white.png')}}" alt="icons8-menu-26-white" class="w-5 h-5">
            </button>
        </div>

        <div id="menu-sm-screen" class="absolute top-0 left-0 w-full h-0 overflow-hidden z-20">

            <div class="flex flex-col bg-white gap-5 p-4 h-full">

                <div class="flex justify-start gap-3 text-rb-blue text-xs font-semibold tracking-wider">
                    <a href="#800-822-2076" class=" underline hover:no-underline flex items-center gap-1">
                        <img src="{{asset('images/bank/icons8-phone-30.png')}}" alt="icons8-phone-30" class="w-4 h-4">
                        <span>Call Us</span>
                    </a>
                    <a href="" class=" underline hover:no-underline flex items-center gap-1">
                        <img src="{{asset('images/bank/icons8-location-64.png')}}" alt="icons8-location-64" class="w-4 h-4">
                        <span>Locations</span>
                    </a>
                    <a href="" class=" underline hover:no-underline flex items-center gap-1">
                        <img src="{{asset('images/bank/icons8-email-64.png')}}" alt="icons8-email-64" class="w-5 h-5">
                        <span>Contact Us</span>
                    </a>
                </div>

                <div class="flex items-center justify-between">
                    <button id="open-login-menu-sm-screen" class="blue-btn-medium">LOGIN</button>

                    <button id="cancel-menu-sm-screen" class="rounded-full p-1.5 bg-rb-blue">
                        <img src="{{asset('images/bank/icons8-cross-50-white.png')}}" alt="icons8-cross-50-white" class="w-9 h-9">
                    </button>
                </div>

                <div class="flex flex-col items-start font-medium tracking-wide text-rb-blue">

                    <button id="personal-menu-toggle-sm-screen" class="my-2">PERSONAL</button>
                    <div id="personal-menu-sm-screen" class="transition-all ease-in-out duration-300 h-0 overflow-hidden w-full">
                        <div class="flex flex-col rounded bg-gradient-to-b from-rb-blue to-rb-blue-light gap-5 p-5">
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">ACCOUNTS</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Checking</a>
                                    <a href="#" class="hover:underline">Savings</a>
                                    <a href="#" class="hover:underline">Money Market</a>
                                    <a href="#" class="hover:underline">CDs</a>
                                    <a href="#" class="hover:underline">IRAs</a>
                                    <a href="#" class="hover:underline">CDARS</a>
                                    <a href="#" class="hover:underline">Debit Card</a>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">LENDING</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Mortgage Loans</a>
                                    <a href="#" class="hover:underline">Home Equity Line of Credit</a>
                                    <a href="#" class="hover:underline">Consumer Lonas</a>
                                    <a href="#" class="hover:underline">Credit Card</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button id="business-menu-toggle-sm-screen" class="my-2">BUSINESS</button>
                    <div id="business-menu-sm-screen" class="transition-all ease-in-out duration-300 h-0 overflow-hidden w-full">
                        <div class="flex flex-col rounded bg-gradient-to-b from-rb-blue to-rb-blue-light gap-5 p-5">
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">ACCOUNTS</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Checking</a>
                                    <a href="#" class="hover:underline">Savings</a>
                                    <a href="#" class="hover:underline">Money Market</a>
                                    <a href="#" class="hover:underline">CDs</a>
                                    <a href="#" class="hover:underline">IRAs</a>
                                    <a href="#" class="hover:underline">CDARS</a>
                                    <a href="#" class="hover:underline">Debit Card</a>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">LENDING</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Commercial Loans</a>
                                    <a href="#" class="hover:underline">Lines of Credit</a>
                                    <a href="#" class="hover:underline">Real Estate Loans</a>
                                    <a href="#" class="hover:underline">Small Business Loans</a>
                                    <a href="#" class="hover:underline">Tenant Improvement</a>
                                    <a href="#" class="hover:underline">Developer Banking</a>
                                    <a href="#" class="hover:underline">Builder Banking</a>
                                    <a href="#" class="hover:underline">HOA Loans</a>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">TREASURY</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Merchant Services</a>
                                    <a href="#" class="hover:underline">Cash Management</a>
                                    <a href="#" class="hover:underline">Commercial Bankinf</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button id="service-menu-toggle-sm-screen" class="my-2">SERVICES</button>
                    <div id="service-menu-sm-screen" class="transition-all ease-in-out duration-300 h-0 overflow-hidden w-full">
                        <div class="flex flex-col rounded bg-gradient-to-b from-rb-blue to-rb-blue-light gap-5 p-5">
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">DIGITAL</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Online Banking</a>
                                    <a href="#" class="hover:underline">Mobile Banking</a>
                                    <a href="#" class="hover:underline">Over Draft Protection</a>
                                    <a href="#" class="hover:underline">Financial Calculator</a>
                                    <a href="#" class="hover:underline">Digital Payments</a>
                                    <a href="#" class="hover:underline">ID Theft Smart</a>
                                    <a href="#" class="hover:underline">Bill Pay</a>
                                    <a href="#" class="hover:underline">Safe Deposit</a>
                                    <a href="#" class="hover:underline">Paperless Statements</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button id="wealth-menu-toggle-sm-screen" class="my-2">WEALTH MANAGEMENT</button>
                    <div id="wealth-menu-sm-screen" class="transition-all ease-in-out duration-300 h-0 overflow-hidden w-full">
                        <div class="flex flex-col rounded bg-gradient-to-b from-rb-blue to-rb-blue-light gap-5 p-5">
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">MANAGEMENT</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Riverview Trust Company</a>
                                    <a href="#" class="hover:underline">Investment Management</a>
                                    <a href="#" class="hover:underline">Trust & Estates</a>
                                    <a href="#" class="hover:underline">Financial Wellness</a>
                                    <a href="#" class="hover:underline">Extras</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button id="about-menu-toggle-sm-screen" class="my-2">ABOUT</button>
                    <div id="about-menu-sm-screen" class="transition-all ease-in-out duration-300 h-0 overflow-hidden w-full">
                        <div class="flex flex-col rounded bg-gradient-to-b from-rb-blue to-rb-blue-light gap-5 p-5">
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">RIVERVIEW</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Our Story</a>
                                    <a href="#" class="hover:underline">Our Blog</a>
                                    <a href="#" class="hover:underline">Community</a>
                                    <a href="#" class="hover:underline">Leadership</a>
                                    <a href="#" class="hover:underline">Investor Relations</a>
                                    <a href="#" class="hover:underline">Careers</a>
                                    <a href="#" class="hover:underline">Media</a>
                                    <a href="#" class="hover:underline">Mission Vision Values</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="login-menu-sm-screen" class="absolute top-0 left-0 w-full h-0 overflow-hidden z-20">

            <div class="flex flex-col bg-white gap-5 p-5 h-full bg-gradient-to-b from-rb-blue to-rb-blue-light">
                <div class="flex justify-end">
                    <button id="cancel-login-menu-sm-screen" class="rounded-full p-1.5 bg-rb-blue-light">
                        <img src="{{asset('images/bank/icons8-cross-50-white.png')}}" alt="icons8-cross-50-white" class="w-9 h-9">
                    </button>
                </div>

                <div class="flex flex-col gap-10 text-white">

                    <h2 class="text-extra-large text-center">Account Access</h2>

                    <div class="flex flex-col gap-1">
                        <label for="account-sm" class="font-medium text-xs">ACCOUNT*</label>
                        <select name="account-sm" id="account-sm" class="bg-transparent border border-white w-full outline-none py-2 px-5 text-white text-lg rounded">
                            <option class="text-black" value="internet-banking" selected>Internet Banking</option>
                            <option class="text-black" value="riverview-trust-company">Riverview Trust Company</option>
                            <option class="text-black" value="credit-card">Credit Card</option>
                            <option class="text-black" value="merchant-bank-card">Merchant Bank Card</option>
                            <option class="text-black" value="id-theft-smart">ID Theft Smart</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="login-id-sm" class="font-medium text-xs">LOGIN ID*</label>
                        <input type="text" name="login-id-sm" id="login-id-sm" class="bg-transparent border border-white w-full outline-none py-2 px-5 text-white text-lg rounded">
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="password-sm" class="font-medium text-xs">PASSWORD*</label>
                        <input type="password" name="password-sm" id="password-sm" class="bg-transparent border border-white w-full outline-none py-2 px-5 text-white text-lg rounded">
                    </div>

                    <div class="flex justify-start">
                        <a href="{{route('bank.dashboard_page')}}" id="signin-btn" class="sky-btn-medium">LOGIN</a>
                    </div>

                    <div class="flex flex-col text-white font-medium text-sm items-start gap-1">
                        <a href="#" class="underline hover:no-underline">Are You A First Time User?</a>
                        <a href="#" class="underline hover:no-underline">You Can Enroll Now</a>
                        <a href="#" class="underline hover:no-underline">Need Help</a>
                    </div>

                    <div class="flex gap-2 items-center justify-center">
                        <img src="{{asset('images/bank/apple.png')}}" alt="apple" class="w-1/2 max-w-56">
                        <img src="{{asset('images/bank/google-play.png')}}" alt="google-play" class="w-1/2 max-w-56">
                    </div>

                </div>
            </div>
        </div>

        <div id="search-menu-sm-screen" class="absolute top-24 left-0 w-full h-0 overflow-hidden transition-all ease-in-out duration-300 z-10">
            <div class="text-rb-bluefont-medium px-4 md:px-10">

                <div class="flex flex-col bg-white p-2 border border-rb-blue rounded">
                    <label for="search" class="text-xs">I'M LOOKING FOR...</label>
                    <div class="flex border-b border-b-rb-blue items-center">
                        <input type="search" name="search" id="search" placeholder="Search" class="bg-transparent p-2 outline-none w-full">
                        <img src="{{asset('images/bank/icons8-search-50.png')}}" alt="icons8-search-50" class="w-5 h-5">
                    </div>
                </div>
            </div>

    </header>

    <!-- Large Screen Header -->
    <div class="hidden lg:flex justify-end gap-5 text-rb-blue text-xs font-semibold tracking-wider pt-4 horizontal-alignment">
        <a href="" class=" underline hover:no-underline flex items-center gap-1">
            <img src="{{asset('images/bank/icons8-phone-30.png')}}" alt="icons8-phone-30" class="w-4 h-4">
            <span>800-822-2076</span>
        </a>
        <a href="" class=" underline hover:no-underline flex items-center gap-1">
            <img src="{{asset('images/bank/icons8-location-64.png')}}" alt="icons8-location-64" class="w-4 h-4">
            <span>Locations</span>
        </a>
        <a href="" class=" underline hover:no-underline flex items-center gap-1">
            <img src="{{asset('images/bank/icons8-email-64.png')}}" alt="icons8-email-64" class="w-5 h-5">
            <span>Contact Us</span>
        </a>
    </div>
    <div class="sticky top-0 w-full z-20 horizontal-alignment bg-white">
        <div class="flex items-center justify-between bg-white pb-2 border-b">
            <img src="{{asset('images/bank/bank-full-logo.svg')}}" alt="bank-full-logo" class="w-32 lg:w-40">

            <div class="flex lg:gap-10 gap-5 relative">

                <div class="group/item-personal">
                    <button class=" text-rb-blue hover:underline underline-offset-4 font-medium">PERSONAL</button>
                    <div class="invisible group-hover/item-personal:visible absolute left-0 z-10">
                        <div class="flex xl:gap-14 xl:py-10 xl:px-14 gap-10 py-6 px-10 bg-gradient-to-br from-rb-blue to-rb-blue-light mt-5 rounded ">
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">ACCOUNTS</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Checking</a>
                                    <a href="#" class="hover:underline">Savings</a>
                                    <a href="#" class="hover:underline">Money Market</a>
                                    <a href="#" class="hover:underline">CDs</a>
                                    <a href="#" class="hover:underline">IRAs</a>
                                    <a href="#" class="hover:underline">CDARS</a>
                                    <a href="#" class="hover:underline">Debit Card</a>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">LENDING</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Mortgage Loans</a>
                                    <a href="#" class="hover:underline">Home Equity Line of Credit</a>
                                    <a href="#" class="hover:underline">Consumer Lonas</a>
                                    <a href="#" class="hover:underline">Credit Card</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group/item-business">
                    <button class=" text-rb-blue hover:underline underline-offset-4 font-medium">BUSINESS</button>
                    <div class="invisible group-hover/item-business:visible absolute left-0 z-10">
                        <div class="flex xl:gap-14 xl:py-10 xl:px-14 gap-10 py-6 px-10 bg-gradient-to-br from-rb-blue to-rb-blue-light mt-5 rounded ">
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">ACCOUNTS</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Checking</a>
                                    <a href="#" class="hover:underline">Savings</a>
                                    <a href="#" class="hover:underline">Money Market</a>
                                    <a href="#" class="hover:underline">CDs</a>
                                    <a href="#" class="hover:underline">IRAs</a>
                                    <a href="#" class="hover:underline">CDARS</a>
                                    <a href="#" class="hover:underline">Debit Card</a>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">LENDING</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Commercial Loans</a>
                                    <a href="#" class="hover:underline">Lines of Credit</a>
                                    <a href="#" class="hover:underline">Real Estate Loans</a>
                                    <a href="#" class="hover:underline">Small Business Loans</a>
                                    <a href="#" class="hover:underline">Tenant Improvement</a>
                                    <a href="#" class="hover:underline">Developer Banking</a>
                                    <a href="#" class="hover:underline">Builder Banking</a>
                                    <a href="#" class="hover:underline">HOA Loans</a>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">TREASURY</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Merchant Services</a>
                                    <a href="#" class="hover:underline">Cash Management</a>
                                    <a href="#" class="hover:underline">Commercial Bankinf</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group/item-services relative">
                    <button class=" text-rb-blue hover:underline underline-offset-4 font-medium">SERVICES</button>
                    <div class="invisible group-hover/item-services:visible absolute left-0 z-10">
                        <div class="flex xl:gap-14 xl:py-10 xl:px-14 gap-10 py-6 px-10 bg-gradient-to-br from-rb-blue to-rb-blue-light mt-5 rounded ">
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">DIGITAL</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Online Banking</a>
                                    <a href="#" class="hover:underline">Mobile Banking</a>
                                    <a href="#" class="hover:underline">Over Draft Protection</a>
                                    <a href="#" class="hover:underline">Financial Calculator</a>
                                    <a href="#" class="hover:underline">Digital Payments</a>
                                    <a href="#" class="hover:underline">ID Theft Smart</a>
                                    <a href="#" class="hover:underline">Bill Pay</a>
                                    <a href="#" class="hover:underline">Safe Deposit</a>
                                    <a href="#" class="hover:underline">Paperless Statements</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group/item-wealth-management ">
                    <button class=" text-rb-blue hover:underline underline-offset-4 font-medium">WEALTH</button>
                    <div class="invisible group-hover/item-wealth-management:visible absolute right-0 z-10">
                        <div class="flex xl:gap-14 xl:py-10 xl:px-14 gap-10 py-6 px-10 bg-gradient-to-br from-rb-blue to-rb-blue-light mt-5 rounded ">
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">MANAGEMENT</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Riverview Trust Company</a>
                                    <a href="#" class="hover:underline">Investment Management</a>
                                    <a href="#" class="hover:underline">Trust & Estates</a>
                                    <a href="#" class="hover:underline">Financial Wellness</a>
                                    <a href="#" class="hover:underline">Extras</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group/item-about relative">
                    <button class=" text-rb-blue hover:underline underline-offset-4 font-medium">ABOUT</button>
                    <div class="invisible group-hover/item-about:visible absolute right-0 z-10">
                        <div class="flex xl:gap-14 xl:py-10 xl:px-14 gap-10 py-6 px-10 bg-gradient-to-br from-rb-blue to-rb-blue-light mt-5 rounded ">
                            <div class="flex flex-col gap-2 font-medium tracking-wider">
                                <h3 class="text-rb-green-light cursor-default">RIVERVIEW</h3>
                                <div class="flex flex-col items-start gap-2 text-white text-sm min-w-max">
                                    <a href="#" class="hover:underline">Our Story</a>
                                    <a href="#" class="hover:underline">Our Blog</a>
                                    <a href="#" class="hover:underline">Community</a>
                                    <a href="#" class="hover:underline">Leadership</a>
                                    <a href="#" class="hover:underline">Investor Relations</a>
                                    <a href="#" class="hover:underline">Careers</a>
                                    <a href="#" class="hover:underline">Media</a>
                                    <a href="#" class="hover:underline">Mission Vision Values</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex gap-4 items-center relative">
                <div class="">
                    <button id="search-icon">
                        <img src="{{asset('images/bank/icons8-search-50.png')}}" alt="icons8-search-50" class="w-6 h-6">
                    </button>
                    <div id="search-icon-toggle" class="absolute right-0 top-12 h-0 transition-all ease-in-out duration-300 overflow-hidden">
                        <div class="flex flex-col p-10 bg-gradient-to-br from-rb-blue to-rb-blue-light rounded gap-4 w-96">
                            <h2 class="text-xl text-rb-green-light font-medium">SEARCH</h2>
                            <div class="flex flex-col text-white">
                                <label for="search" class="text-xs font-medium">I'M LOOKING FOR...</label>
                                <div class="flex border-b items-center">
                                    <img src="{{asset('images/bank/icons8-search-50-white.png')}}" alt="icons8-search-50-white" class="w-5 h-5">
                                    <input type="search" name="search" id="search" placeholder="Search" class="bg-transparent p-2 outline-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <button id="login-btn" class="blue-btn-medium">LOGIN</button>
                    <div id="login-btn-toggle" class="absolute right-0 top-12 h-0 transition-all ease-in-out duration-300 overflow-hidden">
                        <div class="flex flex-col p-10 bg-gradient-to-br from-rb-blue to-rb-blue-light rounded gap-4 w-96">
                            <h2 class="text-xl text-rb-green-light font-medium">ACCOUNT LOGIN</h2>

                            <div class="flex flex-col">
                                <label for="email" class="text-xs font-medium text-white">ACCOUNT</label>
                                <div class="flex border-b items-center gap-2  min-w-max">
                                    <img src="{{asset('images/bank/icons8-globe-24-white.png')}}" alt="icons8-globe-24-white" class="w-5 h-5">
                                    <select name="account" id="account" class="bg-transparent w-full outline-none rounded-none py-1 text-white">
                                        <option class="text-black" value="internet-banking" selected>Internet Banking</option>
                                        <option class="text-black" value="riverview-trust-company">Riverview Trust Company</option>
                                        <option class="text-black" value="credit-card">Credit Card</option>
                                        <option class="text-black" value="merchant-bank-card">Merchant Bank Card</option>
                                        <option class="text-black" value="id-theft-smart">ID Theft Smart</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-col text-white">
                                <label for="email" class="text-xs font-medium">LOGIN ID</label>
                                <div class="flex border-b items-center">
                                    <img src="{{asset('images/bank/icons8-email-64-white.png')}}" alt="icons8-email-64-white" class="w-5 h-5">
                                    <input type="text" name="login-id" id="login-id" class="bg-transparent p-2 outline-none">
                                </div>
                            </div>

                            <div class="flex flex-col text-white gap-1">
                                <label for="password" class="text-xs font-medium">PASSWORD</label>
                                <div class="flex border-b items-center">
                                    <img src="{{asset('images/bank/icons8-password-30-white.png')}}" alt="icons8-password-30-white" class="w-5 h-5">
                                    <input type="password" name="password" id="password" class="bg-transparent p-2 outline-none">
                                </div>
                                <a href="#" class="font-medium text-sm text-right">Forgot Password?</a>
                            </div>

                            <div class="flex justify-end">
                                <a href="{{route('bank.dashboard_page')}}" id="signin-btn" class="sky-btn-medium">SIGN IN</a>
                            </div>

                            <div class="flex flex-col text-white font-medium text-sm items-start gap-1">
                                <a href="#" class="underline hover:no-underline">Are You A First Time User?</a>
                                <a href="#" class="underline hover:no-underline">You Can Enroll Now</a>
                                <a href="#" class="underline hover:no-underline">Need Help</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="flex flex-col px-5 md:px-10 lg:px-10 xl:px-16 gap-10 py-5 bg-rb-blue">

        <!-- Footer Small Screen -->
        <div class="flex flex-col gap-2 lg:hidden">

            <div class="flex flex-col py-1 font-medium tracking-wider border-b border-rb-blue-line">
                <button id="footer-personal-account-toggle" class="flex justify-between text-rb-green-light">
                    <h3 class="text-sm">PERSONAL ACCOUNTS</h3>
                    <img id="footer-personal-account-sign" src="{{asset('images/bank/icons8-arrow-30-green.png')}}" alt="icons8-arrow-30-green" class="w-5 transition-all ease-in-out duration-300">
                </button>
                <div id="footer-personal-account" class="flex flex-col items-start gap-2 text-white text-sm h-0 overflow-hidden transition-all ease-in-out duration-300">
                    <a href="#" class="hover:underline">Checking</a>
                    <a href="#" class="hover:underline">Savings</a>
                    <a href="#" class="hover:underline">Money Market</a>
                    <a href="#" class="hover:underline">CDs</a>
                    <a href="#" class="hover:underline">IRAs</a>
                    <a href="#" class="hover:underline">CDARs</a>
                    <a href="#" class="hover:underline">Debit Card</a>
                </div>
            </div>

            <div class="flex flex-col py-1 font-medium tracking-wider border-b border-rb-blue-line">
                <button id="footer-personal-lending-toggle" class="flex justify-between text-rb-green-light">
                    <h3 class="text-sm">PERSONAL LENDINGS</h3>
                    <img id="footer-personal-lending-sign" src="{{asset('images/bank/icons8-arrow-30-green.png')}}" alt="icons8-arrow-30-green" class="w-5 transition-all ease-in-out duration-300">
                </button>
                <div id="footer-personal-lending" class="flex flex-col items-start gap-2 text-white text-sm h-0 overflow-hidden transition-all ease-in-out duration-300">
                    <a href="#" class="hover:underline">Mortgage Loans</a>
                    <a href="#" class="hover:underline">Home Equity</a>
                    <a href="#" class="hover:underline">Consumer Loans</a>
                    <a href="#" class="hover:underline">Credit Cards</a>
                </div>
            </div>

            <div class="flex flex-col py-1 font-medium tracking-wider border-b border-rb-blue-line">
                <button id="footer-business-account-toggle" class="flex justify-between text-rb-green-light">
                    <h3 class="text-sm">BUSINESS ACCOUNTS</h3>
                    <img id="footer-business-account-sign" src="{{asset('images/bank/icons8-arrow-30-green.png')}}" alt="icons8-arrow-30-green" class="w-5 transition-all ease-in-out duration-300">
                </button>
                <div id="footer-business-account" class="flex flex-col items-start gap-2 text-white text-sm h-0 overflow-hidden transition-all ease-in-out duration-300">
                    <a href="#" class="hover:underline">Checking</a>
                    <a href="#" class="hover:underline">Savings, Money Market and CDs</a>
                    <a href="#" class="hover:underline">Debit Card</a>
                </div>
            </div>

            <div class="flex flex-col py-1 font-medium tracking-wider border-b border-rb-blue-line">
                <button id="footer-business-lending-toggle" class="flex justify-between text-rb-green-light">
                    <h3 class="text-sm">BUSINESS LENDINGS</h3>
                    <img id="footer-business-lending-sign" src="{{asset('images/bank/icons8-arrow-30-green.png')}}" alt="icons8-arrow-30-green" class="w-5 transition-all ease-in-out duration-300">
                </button>
                <div id="footer-business-lending" class="flex flex-col items-start gap-2 text-white text-sm h-0 overflow-hidden transition-all ease-in-out duration-300">
                    <a href="#" class="hover:underline">Commercial Loans</a>
                    <a href="#" class="hover:underline">Lines of Credit</a>
                    <a href="#" class="hover:underline">Real Estate Loans</a>
                    <a href="#" class="hover:underline">Small Business Loans</a>
                    <a href="#" class="hover:underline">Credit Cards</a>
                    <a href="#" class="hover:underline">Tenant Improvement</a>
                    <a href="#" class="hover:underline">Financing</a>
                    <a href="#" class="hover:underline">Builder & Developer Banking</a>
                    <a href="#" class="hover:underline">HOA Loans</a>
                </div>
            </div>

            <div class="flex flex-col py-1 font-medium tracking-wider border-b border-rb-blue-line">
                <button id="footer-treasury-management-toggle" class="flex justify-between text-rb-green-light">
                    <h3 class="text-sm">TREASURY MEASUREMENT</h3>
                    <img id="footer-treasury-management-sign" src="{{asset('images/bank/icons8-arrow-30-green.png')}}" alt="icons8-arrow-30-green" class="w-5 transition-all ease-in-out duration-300">
                </button>
                <div id="footer-treasury-management" class="flex flex-col items-start gap-2 text-white text-sm h-0 overflow-hidden transition-all ease-in-out duration-300">
                    <a href="#" class="hover:underline">Merchant Services</a>
                    <a href="#" class="hover:underline">Cash Management</a>
                    <a href="#" class="hover:underline">Commercial Banking</a>
                </div>
            </div>

            <div class="flex flex-col py-1 font-medium tracking-wider border-b border-rb-blue-line">
                <button id="footer-service-toggle" class="flex justify-between text-rb-green-light">
                    <h3 class="text-sm">SERVICES</h3>
                    <img id="footer-service-sign" src="{{asset('images/bank/icons8-arrow-30-green.png')}}" alt="icons8-arrow-30-green" class="w-5 transition-all ease-in-out duration-300">
                </button>
                <div id="footer-service" class="flex flex-col items-start gap-2 text-white text-sm h-0 overflow-hidden transition-all ease-in-out duration-300">
                    <a href="#" class="hover:underline">Online and Mobile</a>
                    <a href="#" class="hover:underline">Banking</a>
                    <a href="#" class="hover:underline">Overdraft Protection</a>
                    <a href="#" class="hover:underline">Financial Calculators</a>
                    <a href="#" class="hover:underline">Digital Payments</a>
                    <a href="#" class="hover:underline">ID TheftSmart</a>
                    <a href="#" class="hover:underline">Bill Pay</a>
                    <a href="#" class="hover:underline">Safe Dposit</a>
                    <a href="#" class="hover:underline">Paperless Statements</a>
                    <a href="#" class="hover:underline">Financial Wellness</a>
                </div>
            </div>

            <div class="flex flex-col py-1 font-medium tracking-wider border-b border-rb-blue-line">
                <button id="footer-washington-location-toggle" class="flex justify-between text-rb-green-light">
                    <h3 class="text-sm">WASHINGTON LOCATIONS</h3>
                    <img id="footer-washington-location-sign" src="{{asset('images/bank/icons8-arrow-30-green.png')}}" alt="icons8-arrow-30-green" class="w-5 transition-all ease-in-out duration-300">
                </button>
                <div id="footer-washington-location" class="flex flex-col items-start gap-2 text-white text-sm h-0 overflow-hidden transition-all ease-in-out duration-300">
                    <a href="#" class="hover:underline">Battle Ground</a>
                    <a href="#" class="hover:underline">Camas</a>
                    <a href="#" class="hover:underline">Cascade Park</a>
                    <a href="#" class="hover:underline">Golden Dale</a>
                    <a href="#" class="hover:underline">Hazel Dell</a>
                    <a href="#" class="hover:underline">Orchards</a>
                    <a href="#" class="hover:underline">Ridgefield</a>
                    <a href="#" class="hover:underline">Salmon Creek</a>
                    <a href="#" class="hover:underline">Stevenson</a>
                    <a href="#" class="hover:underline">Tech Center</a>
                    <a href="#" class="hover:underline">Vancouver main</a>
                    <a href="#" class="hover:underline">Washougal</a>
                    <a href="#" class="hover:underline">White Salmon</a>
                </div>
            </div>

            <div class="flex flex-col py-1 font-medium tracking-wider border-b border-rb-blue-line">
                <button id="footer-oregon-location-toggle" class="flex justify-between text-rb-green-light">
                    <h3 class="text-sm">OREGON LOCATIONS</h3>
                    <img id="footer-oregon-location-sign" src="{{asset('images/bank/icons8-arrow-30-green.png')}}" alt="icons8-arrow-30-green" class="w-5 transition-all ease-in-out duration-300">
                </button>
                <div id="footer-oregon-location" class="flex flex-col items-start gap-2 text-white text-sm h-0 overflow-hidden transition-all ease-in-out duration-300">
                    <a href="#" class="hover:underline">Aumsville</a>
                    <a href="#" class="hover:underline">Gateway</a>
                    <a href="#" class="hover:underline">Gresham</a>
                    <a href="#" class="hover:underline">Tualatin</a>
                </div>
            </div>

            <div class="flex flex-col py-1 font-medium tracking-wider border-b border-rb-blue-line">
                <button id="footer-customer-toggle" class="flex justify-between text-rb-green-light">
                    <h3 class="text-sm">CUSTOMER</h3>
                    <img id="footer-customer-sign" src="{{asset('images/bank/icons8-arrow-30-green.png')}}" alt="icons8-arrow-30-green" class="w-5 transition-all ease-in-out duration-300">
                </button>
                <div id="footer-customer" class="flex flex-col items-start gap-2 text-white text-sm h-0 overflow-hidden transition-all ease-in-out duration-300">
                    <a href="#" class="hover:underline">Contact Us</a>
                    <a href="#" class="hover:underline">Privacy Policy</a>
                    <a href="#" class="hover:underline">Security Center</a>
                    <a href="#" class="hover:underline">Foreclosure Help</a>
                </div>
            </div>

            <div class="flex flex-col py-1 font-medium tracking-wider border-b border-rb-blue-line">
                <button id="footer-about-toggle" class="flex justify-between text-rb-green-light">
                    <h3 class="text-sm">ABOUT</h3>
                    <img id="footer-about-sign" src="{{asset('images/bank/icons8-arrow-30-green.png')}}" alt="icons8-arrow-30-green" class="w-5 transition-all ease-in-out duration-300">
                </button>
                <div id="footer-about" class="flex flex-col items-start gap-2 text-white text-sm h-0 overflow-hidden transition-all ease-in-out duration-300">
                    <a href="#" class="hover:underline">Our Story</a>
                    <a href="#" class="hover:underline">Community</a>
                    <a href="#" class="hover:underline">Leadership</a>
                    <a href="#" class="hover:underline">Investor Relations</a>
                    <a href="#" class="hover:underline">Careers</a>
                    <a href="#" class="hover:underline">Media</a>
                    <a href="#" class="hover:underline">Riverview Bank Blog</a>
                </div>
            </div>

        </div>

        <!-- Footer Large Screen -->
        <div class="hidden lg:flex gap-8">

            <div class="flex flex-col gap-10">
                <div class="flex flex-col gap-2 font-medium tracking-wider">
                    <h3 class="text-rb-green-light cursor-default">PERSONAL ACCOUNTS</h3>
                    <div class="flex flex-col items-start gap-2 text-white text-sm">
                        <a href="#" class="hover:underline">Checking</a>
                        <a href="#" class="hover:underline">Savings</a>
                        <a href="#" class="hover:underline">Money Market</a>
                        <a href="#" class="hover:underline">CDs</a>
                        <a href="#" class="hover:underline">IRAs</a>
                        <a href="#" class="hover:underline">CDARs</a>
                        <a href="#" class="hover:underline">Debit Card</a>
                    </div>
                </div>

                <div class="flex flex-col gap-2 font-medium tracking-wider">
                    <h3 class="text-rb-green-light cursor-default">BUSINESS ACCOUNTS</h3>
                    <div class="flex flex-col items-start gap-2 text-white text-sm">
                        <a href="#" class="hover:underline">Checking</a>
                        <a href="#" class="hover:underline">Savings, Money Market and CDs</a>
                        <a href="#" class="hover:underline">Debit Card</a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-10">
                <div class="flex flex-col gap-2 font-medium tracking-wider">
                    <h3 class="text-rb-green-light cursor-default">PERSONAL LENDING</h3>
                    <div class="flex flex-col items-start gap-2 text-white text-sm">
                        <a href="#" class="hover:underline">Mortgage Loans</a>
                        <a href="#" class="hover:underline">Home Equity</a>
                        <a href="#" class="hover:underline">Consumer Loans</a>
                        <a href="#" class="hover:underline">Credit Cards</a>
                    </div>
                </div>

                <div class="flex flex-col gap-2 font-medium tracking-wider">
                    <h3 class="text-rb-green-light cursor-default">BUSINESS LENDING</h3>
                    <div class="flex flex-col items-start gap-2 text-white text-sm">
                        <a href="#" class="hover:underline">Commercial Loans</a>
                        <a href="#" class="hover:underline">Lines of Credit</a>
                        <a href="#" class="hover:underline">Real Estate Loans</a>
                        <a href="#" class="hover:underline">Small Business Loans</a>
                        <a href="#" class="hover:underline">Credit Cards</a>
                        <a href="#" class="hover:underline">Tenant Improvement</a>
                        <a href="#" class="hover:underline">Financing</a>
                        <a href="#" class="hover:underline">Builder & Developer Banking</a>
                        <a href="#" class="hover:underline">HOA Loans</a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-10">
                <div class="flex flex-col gap-2 font-medium tracking-wider">
                    <h3 class="text-rb-green-light cursor-default">SERVICES</h3>
                    <div class="flex flex-col items-start gap-2 text-white text-sm">
                        <a href="#" class="hover:underline">Online and Mobile</a>
                        <a href="#" class="hover:underline">Banking</a>
                        <a href="#" class="hover:underline">Overdraft Protection</a>
                        <a href="#" class="hover:underline">Financial Calculators</a>
                        <a href="#" class="hover:underline">Digital Payments</a>
                        <a href="#" class="hover:underline">ID TheftSmart</a>
                        <a href="#" class="hover:underline">Bill Pay</a>
                        <a href="#" class="hover:underline">Safe Dposit</a>
                        <a href="#" class="hover:underline">Paperless Statements</a>
                        <a href="#" class="hover:underline">Financial Wellness</a>
                    </div>
                </div>

                <div class="flex flex-col gap-2 font-medium tracking-wider">
                    <h3 class="text-rb-green-light cursor-default">TREASURY MANAGEMENT</h3>
                    <div class="flex flex-col items-start gap-2 text-white text-sm">
                        <a href="#" class="hover:underline">Merchant Services</a>
                        <a href="#" class="hover:underline">Cash Management</a>
                        <a href="#" class="hover:underline">Commercial Banking</a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-10">
                <div class="flex flex-col gap-2 font-medium tracking-wider">
                    <h3 class="text-rb-green-light cursor-default">WASHINGTON LOCATIONS</h3>
                    <div class="flex flex-col items-start gap-2 text-white text-sm">
                        <a href="#" class="hover:underline">Battle Ground</a>
                        <a href="#" class="hover:underline">Camas</a>
                        <a href="#" class="hover:underline">Cascade Park</a>
                        <a href="#" class="hover:underline">Golden Dale</a>
                        <a href="#" class="hover:underline">Hazel Dell</a>
                        <a href="#" class="hover:underline">Orchards</a>
                        <a href="#" class="hover:underline">Ridgefield</a>
                        <a href="#" class="hover:underline">Salmon Creek</a>
                        <a href="#" class="hover:underline">Stevenson</a>
                        <a href="#" class="hover:underline">Tech Center</a>
                        <a href="#" class="hover:underline">Vancouver main</a>
                        <a href="#" class="hover:underline">Washougal</a>
                        <a href="#" class="hover:underline">White Salmon</a>
                    </div>
                </div>

                <div class="flex flex-col gap-2 font-medium tracking-wider">
                    <h3 class="text-rb-green-light cursor-default">OREGON LOCATIONS</h3>
                    <div class="flex flex-col items-start gap-2 text-white text-sm">
                        <a href="#" class="hover:underline">Aumsville</a>
                        <a href="#" class="hover:underline">Gateway</a>
                        <a href="#" class="hover:underline">Gresham</a>
                        <a href="#" class="hover:underline">Tualatin</a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-10">
                <div class="flex flex-col gap-2 font-medium tracking-wider">
                    <h3 class="text-rb-green-light cursor-default">ABOUT</h3>
                    <div class="flex flex-col items-start gap-2 text-white text-sm">
                        <a href="#" class="hover:underline">Our Story</a>
                        <a href="#" class="hover:underline">Community</a>
                        <a href="#" class="hover:underline">Leadership</a>
                        <a href="#" class="hover:underline">Investor Relations</a>
                        <a href="#" class="hover:underline">Careers</a>
                        <a href="#" class="hover:underline">Media</a>
                        <a href="#" class="hover:underline">Riverview Bank Blog</a>
                    </div>
                </div>

                <div class="flex flex-col gap-2 font-medium tracking-wider">
                    <h3 class="text-rb-green-light cursor-default">CUSTOMER CARE</h3>
                    <div class="flex flex-col items-start gap-2 text-white text-sm">
                        <a href="#" class="hover:underline">Contact Us</a>
                        <a href="#" class="hover:underline">Privacy Policy</a>
                        <a href="#" class="hover:underline">Security Center</a>
                        <a href="#" class="hover:underline">Foreclosure Help</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="hidden lg:block">

        <div class="flex flex-col items-center md:flex-row md:justify-between gap-5">
            <div class="flex flex-col md:flex-row items-center gap-5">
                <div class="flex gap-2 items-center">
                    <img src="{{asset('images/bank/icons8-facebook-50-white.png')}}" alt="icons8-facebook-50-white" class="w-8">
                    <img src="{{asset('images/bank/icons8-instagram-50-white.png')}}" alt="icons8-instagram-50-white" class="w-8">
                    <img src="{{asset('images/bank/icons8-linked-in-50-white.png')}}" alt="icons8-linked-in-50-white" class="w-8">
                </div>
                <div class="font-medium text-white text-sm text-center md:text-left">
                    <p>Riverview Bank</p>
                    <p>900 Washington Street #900</p>
                    <p>Vancouver, WA 98660</p>
                    <p>Routing #323370666 | NMLS #45076</p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-5">
                <p class="font-medium text-white text-sm text-center md:text-left">&copy; Copyright 2024. All Rights Reserved</p>
                <div class="flex gap-4 items-center">
                    <img src="{{asset('images/bank/ehl-logo-white.png')}}" alt="ehl-logo-white" class="w-8">
                    <img src="{{asset('images/bank/fdic-logo-white.png')}}" alt="fdic-logo-white" class="w-10">
                </div>
            </div>
        </div>

    </footer>

</body>

<script>
    const searchIcon = document.querySelector('#search-icon');
    const searchIconToggle = document.querySelector('#search-icon-toggle');
    const loginBtn = document.querySelector('#login-btn');
    const loginBtnToggle = document.querySelector('#login-btn-toggle');

    const menuSmScreen = document.querySelector('#menu-sm-screen');
    const cancelMenuSmScreen = document.querySelector('#cancel-menu-sm-screen');
    const openMenuSmScreen = document.querySelector('#open-menu-sm-screen');
    const openLoginMenuSmScreen = document.querySelector('#open-login-menu-sm-screen');
    const cancelLoginMenuSmScreen = document.querySelector('#cancel-login-menu-sm-screen');
    const loginMenuSmScreen = document.querySelector('#login-menu-sm-screen');
    const searchMenuSmScreen = document.querySelector('#search-menu-sm-screen');
    const toggleSearchMenuSmScreen = document.querySelector('#toggle-search-menu-sm-screen');

    const personalMenuToggleSmScreen = document.querySelector('#personal-menu-toggle-sm-screen');
    const personalMenuSmScreen = document.querySelector('#personal-menu-sm-screen');
    const businessMenuToggleSmScreen = document.querySelector('#business-menu-toggle-sm-screen');
    const businessMenuSmScreen = document.querySelector('#business-menu-sm-screen');
    const serviceMenuToggleSmScreen = document.querySelector('#service-menu-toggle-sm-screen');
    const serviceMenuSmScreen = document.querySelector('#service-menu-sm-screen');
    const wealthMenuToggleSmScreen = document.querySelector('#wealth-menu-toggle-sm-screen');
    const wealthMenuSmScreen = document.querySelector('#wealth-menu-sm-screen');
    const aboutMenuToggleSmScreen = document.querySelector('#about-menu-toggle-sm-screen');
    const aboutMenuSmScreen = document.querySelector('#about-menu-sm-screen');

    const footerPersonalAccount = document.querySelector('#footer-personal-account');
    const footerPersonalAccountToggle = document.querySelector('#footer-personal-account-toggle');
    const footerPersonalAccountSign = document.querySelector('#footer-personal-account-sign');
    const footerPersonalLending = document.querySelector('#footer-personal-lending');
    const footerPersonalLendingToggle = document.querySelector('#footer-personal-lending-toggle');
    const footerPersonalLendingSign = document.querySelector('#footer-personal-lending-sign');
    const footerBusinessAccount = document.querySelector('#footer-business-account');
    const footerBusinessAccountToggle = document.querySelector('#footer-business-account-toggle');
    const footerBusinessAccountSign = document.querySelector('#footer-business-account-sign');
    const footerBusinessLending = document.querySelector('#footer-business-lending');
    const footerBusinessLendingToggle = document.querySelector('#footer-business-lending-toggle');
    const footerBusinessLendingSign = document.querySelector('#footer-business-lending-sign');
    const footerTreasuryManagement = document.querySelector('#footer-treasury-management');
    const footerTreasuryManagementToggle = document.querySelector('#footer-treasury-management-toggle');
    const footerTreasuryManagementSign = document.querySelector('#footer-treasury-management-sign');
    const footerService = document.querySelector('#footer-service');
    const footerServiceToggle = document.querySelector('#footer-service-toggle');
    const footerServiceSign = document.querySelector('#footer-service-sign');
    const footerWashingtonLocation = document.querySelector('#footer-washington-location');
    const footerWashingtonLocationToggle = document.querySelector('#footer-washington-location-toggle');
    const footerWashingtonLocationSign = document.querySelector('#footer-washington-location-sign');
    const footerOregonLocation = document.querySelector('#footer-oregon-location');
    const footerOregonLocationToggle = document.querySelector('#footer-oregon-location-toggle');
    const footerOregonLocationSign = document.querySelector('#footer-oregon-location-sign');
    const footerCustomer = document.querySelector('#footer-customer');
    const footerCustomerToggle = document.querySelector('#footer-customer-toggle');
    const footerCustomerSign = document.querySelector('#footer-customer-sign');
    const footerAbout = document.querySelector('#footer-about');
    const footerAboutToggle = document.querySelector('#footer-about-toggle');
    const footerAboutSign = document.querySelector('#footer-about-sign');

    openMenuSmScreen.addEventListener('click', () => {
        menuSmScreen.classList.remove('h-0')
        menuSmScreen.classList.add('h-fit')
    })
    cancelMenuSmScreen.addEventListener('click', () => {
        menuSmScreen.classList.remove('h-fit')
        menuSmScreen.classList.add('h-0')
    })
    openLoginMenuSmScreen.addEventListener('click', () => {
        loginMenuSmScreen.classList.remove('h-0')
        loginMenuSmScreen.classList.add('h-fit')
    })

    cancelLoginMenuSmScreen.addEventListener('click', () => {
        loginMenuSmScreen.classList.remove('h-fit')
        loginMenuSmScreen.classList.add('h-0')
    })
    toggleSearchMenuSmScreen.addEventListener('click', () => {
        searchMenuSmScreen.classList.toggle('h-0')
        searchMenuSmScreen.classList.toggle('h-[80px]')
    })

    personalMenuToggleSmScreen.addEventListener('click', () => {
        personalMenuSmScreen.classList.toggle('h-0')
        personalMenuSmScreen.classList.toggle('h-[420px]')
    })
    businessMenuToggleSmScreen.addEventListener('click', () => {
        businessMenuSmScreen.classList.toggle('h-0')
        businessMenuSmScreen.classList.toggle('h-[660px]')
    })
    serviceMenuToggleSmScreen.addEventListener('click', () => {
        serviceMenuSmScreen.classList.toggle('h-0')
        serviceMenuSmScreen.classList.toggle('h-[320px]')
    })
    wealthMenuToggleSmScreen.addEventListener('click', () => {
        wealthMenuSmScreen.classList.toggle('h-0')
        wealthMenuSmScreen.classList.toggle('h-[210px]')
    })
    aboutMenuToggleSmScreen.addEventListener('click', () => {
        aboutMenuSmScreen.classList.toggle('h-0')
        aboutMenuSmScreen.classList.toggle('h-[290px]')
    })

    searchIcon.addEventListener('click', () => {
        searchIconToggle.classList.toggle('h-0')
        searchIconToggle.classList.toggle('h-[181px]')
        if (loginBtnToggle.classList.contains('h-[490px]')) {
            loginBtn.textContent = 'LOGIN';
            loginBtnToggle.classList.remove('h-[490px]')
            loginBtnToggle.classList.add('h-0')
        }
    })
    loginBtn.addEventListener('click', () => {
        loginBtn.textContent == 'LOGIN' ? loginBtn.textContent = 'CLOSE' : loginBtn.textContent = 'LOGIN';
        loginBtnToggle.classList.toggle('h-0')
        loginBtnToggle.classList.toggle('h-[490px]')
        if (searchIconToggle.classList.contains('h-[181px]')) {
            searchIconToggle.classList.remove('h-[181px]')
            searchIconToggle.classList.add('h-0')
        }
    });

    footerPersonalAccountToggle.addEventListener('click', () => {
        if (footerPersonalAccountSign.classList.contains('-rotate-90')) {
            footerPersonalAccountSign.classList.remove('-rotate-90');
        } else {
            footerPersonalAccountSign.classList.add('-rotate-90');
        }
        footerPersonalAccount.classList.toggle('h-0')
        footerPersonalAccount.classList.toggle('pt-1')
        footerPersonalAccount.classList.toggle('h-[190px]')
    });
    footerPersonalLendingToggle.addEventListener('click', () => {
        if (footerPersonalLendingSign.classList.contains('-rotate-90')) {
            footerPersonalLendingSign.classList.remove('-rotate-90');
        } else {
            footerPersonalLendingSign.classList.add('-rotate-90');
        }
        footerPersonalLending.classList.toggle('h-0')
        footerPersonalLending.classList.toggle('pt-1')
        footerPersonalLending.classList.toggle('h-[110px]')
    });
    footerBusinessAccountToggle.addEventListener('click', () => {
        if (footerBusinessAccountSign.classList.contains('-rotate-90')) {
            footerBusinessAccountSign.classList.remove('-rotate-90');
        } else {
            footerBusinessAccountSign.classList.add('-rotate-90');
        }
        footerBusinessAccount.classList.toggle('h-0')
        footerBusinessAccount.classList.toggle('pt-1')
        footerBusinessAccount.classList.toggle('h-[80px]')
    });
    footerBusinessLendingToggle.addEventListener('click', () => {
        if (footerBusinessLendingSign.classList.contains('-rotate-90')) {
            footerBusinessLendingSign.classList.remove('-rotate-90');
        } else {
            footerBusinessLendingSign.classList.add('-rotate-90');
        }
        footerBusinessLending.classList.toggle('h-0')
        footerBusinessLending.classList.toggle('pt-1')
        footerBusinessLending.classList.toggle('h-[250px]')
    });
    footerTreasuryManagementToggle.addEventListener('click', () => {
        if (footerTreasuryManagementSign.classList.contains('-rotate-90')) {
            footerTreasuryManagementSign.classList.remove('-rotate-90');
        } else {
            footerTreasuryManagementSign.classList.add('-rotate-90');
        }
        footerTreasuryManagement.classList.toggle('h-0')
        footerTreasuryManagement.classList.toggle('pt-1')
        footerTreasuryManagement.classList.toggle('h-[80px]')
    });
    footerServiceToggle.addEventListener('click', () => {
        if (footerServiceSign.classList.contains('-rotate-90')) {
            footerServiceSign.classList.remove('-rotate-90');
        } else {
            footerServiceSign.classList.add('-rotate-90');
        }
        footerService.classList.toggle('h-0')
        footerService.classList.toggle('pt-1')
        footerService.classList.toggle('h-[280px]')
    });
    footerWashingtonLocationToggle.addEventListener('click', () => {
        if (footerWashingtonLocationSign.classList.contains('-rotate-90')) {
            footerWashingtonLocationSign.classList.remove('-rotate-90');
        } else {
            footerWashingtonLocationSign.classList.add('-rotate-90');
        }
        footerWashingtonLocation.classList.toggle('h-0')
        footerWashingtonLocation.classList.toggle('pt-1')
        footerWashingtonLocation.classList.toggle('h-[360px]')
    });
    footerOregonLocationToggle.addEventListener('click', () => {
        if (footerOregonLocationSign.classList.contains('-rotate-90')) {
            footerOregonLocationSign.classList.remove('-rotate-90');
        } else {
            footerOregonLocationSign.classList.add('-rotate-90');
        }
        footerOregonLocation.classList.toggle('h-0')
        footerOregonLocation.classList.toggle('pt-1')
        footerOregonLocation.classList.toggle('h-[110px]')
    });
    footerCustomerToggle.addEventListener('click', () => {
        if (footerCustomerSign.classList.contains('-rotate-90')) {
            footerCustomerSign.classList.remove('-rotate-90');
        } else {
            footerCustomerSign.classList.add('-rotate-90');
        }
        footerCustomer.classList.toggle('h-0')
        footerCustomer.classList.toggle('pt-1')
        footerCustomer.classList.toggle('h-[110px]')
    });
    footerAboutToggle.addEventListener('click', () => {
        if (footerAboutSign.classList.contains('-rotate-90')) {
            footerAboutSign.classList.remove('-rotate-90');
        } else {
            footerAboutSign.classList.add('-rotate-90');
        }
        footerAbout.classList.toggle('h-0')
        footerAbout.classList.toggle('pt-1')
        footerAbout.classList.toggle('h-[200px]')
    });
</script>

</html>