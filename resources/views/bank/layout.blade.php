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

    <div class="xl:px-20 lg:px-10 px-5">

        <div class="flex justify-end gap-5 text-rb-blue py-4 text-xs font-semibold tracking-wider">
            <a href="" class=" underline hover:no-underline flex items-center gap-1">
                <img src="{{asset('images/bank/icons8-phone-30.png')}}" alt="phone" class="w-4 h-4">
                <span>800-822-2076</span>
            </a>
            <a href="" class=" underline hover:no-underline flex items-center gap-1">
                <img src="{{asset('images/bank/icons8-location-64.png')}}" alt="location" class="w-4 h-4">
                <span>Locations</span>
            </a>
            <a href="" class=" underline hover:no-underline flex items-center gap-1">
                <img src="{{asset('images/bank/icons8-email-64.png')}}" alt="email" class="w-5 h-5">
                <span>Contact Us</span>
            </a>
        </div>

        <div class="flex items-center justify-between sticky">
            <img src="{{asset('images/bank/bank-full-logo.svg')}}" alt="logo" class="">

            <div class="flex xl:gap-10 lg:gap-6 md:gap-2 relative">

                <div class="group/item-personal">
                    <button class=" text-rb-blue hover:underline underline-offset-4 font-medium">PERSONAL</button>
                    <div class="invisible group-hover/item-personal:visible absolute left-0">
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
                    <div class="invisible group-hover/item-business:visible absolute left-0">
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
                    <div class="invisible group-hover/item-services:visible absolute left-0">
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
                    <div class="invisible group-hover/item-wealth-management:visible absolute right-0">
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
                    <div class="invisible group-hover/item-about:visible absolute right-0">
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
                        <img src="{{asset('images/bank/icons8-search-50.png')}}" alt="email" class="w-6 h-6">
                    </button>
                    <div id="search-icon-toggle" class="invisible absolute right-0">
                        <div class="flex flex-col p-10 bg-gradient-to-br from-rb-blue to-rb-blue-light mt-5 rounded gap-4 w-96">
                            <h2 class="text-xl text-rb-green-light font-medium">SEARCH</h2>
                            <div class="flex flex-col text-white">
                                <label for="search" class="text-xs font-medium">I'M LOOKING FOR...</label>
                                <div class="flex border-b items-center">
                                    <img src="{{asset('images/bank/icons8-search-50-white.png')}}" alt="email" class="w-5 h-5">
                                    <input type="search" name="search" id="search" placeholder="Search" class="bg-transparent p-2 outline-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <button id="login-btn" class="px-5 py-2 font-medium rounded bg-rb-blue-light hover:bg-rb-blue-light-hover tracking-wide text-white">LOGIN</button>
                    <div id="login-btn-toggle" class="invisible absolute right-0">
                        <div class="flex flex-col p-10 bg-gradient-to-br from-rb-blue to-rb-blue-light mt-3 rounded gap-4 w-96">
                            <h2 class="text-xl text-rb-green-light font-medium">ACCOUNT LOGIN</h2>

                            <div class="flex flex-col">
                                <label for="email" class="text-xs font-medium text-white">ACCOUNT</label>
                                <div class="flex border-b items-center gap-2  min-w-max">
                                    <img src="{{asset('images/bank/icons8-globe-24-white.png')}}" alt="login-id" class="w-5 h-5">
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
                                    <img src="{{asset('images/bank/icons8-email-64-white.png')}}" alt="login-id" class="w-5 h-5">
                                    <input type="text" name="login-id" id="login-id" class="bg-transparent p-2 outline-none">
                                </div>
                            </div>

                            <div class="flex flex-col text-white gap-1">
                                <label for="password" class="text-xs font-medium">PASSWORD</label>
                                <div class="flex border-b items-center">
                                    <img src="{{asset('images/bank/icons8-password-30-white.png')}}" alt="password" class="w-5 h-5">
                                    <input type="password" name="password" id="password" class="bg-transparent p-2 outline-none">
                                </div>
                                <a href="#" class="font-medium text-sm text-right">Forgot Password?</a>
                            </div>

                            <div class="flex justify-end">
                                <!-- <button id="signin-btn" class="px-5 py-2 font-medium rounded hover:bg-rb-blue-light-hover bg-rb-blue tracking-wide text-white">SIGN IN</button> -->
                                <a href="{{route('bank.dashboard_page')}}" id="signin-btn" class="px-5 py-2 font-medium rounded hover:bg-rb-blue-light-hover bg-rb-blue tracking-wide text-white">SIGN IN</a>
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

        @yield('content')
    </div>
</body>

<script>
    const searchIcon = document.querySelector('#search-icon');
    const searchIconToggle = document.querySelector('#search-icon-toggle');
    const loginBtn = document.querySelector('#login-btn');
    const loginBtnToggle = document.querySelector('#login-btn-toggle');
    const bodyTag = document.querySelector('body');

    searchIcon.addEventListener('click', () => {
        searchIconToggle.classList.toggle('visible')
        searchIconToggle.classList.toggle('invisible')
        if (loginBtnToggle.classList.contains('visible')) {
            loginBtn.textContent = 'LOGIN';
            loginBtnToggle.classList.remove('visible')
            loginBtnToggle.classList.add('invisible')
        }
    })

    loginBtn.addEventListener('click', () => {
        loginBtn.textContent == 'LOGIN' ? loginBtn.textContent = 'CLOSE' : loginBtn.textContent = 'LOGIN';
        loginBtnToggle.classList.toggle('visible')
        loginBtnToggle.classList.toggle('invisible')
        if (searchIconToggle.classList.contains('visible')) {
            searchIconToggle.classList.remove('visible')
            searchIconToggle.classList.add('invisible')
        }
    })
</script>

</html>