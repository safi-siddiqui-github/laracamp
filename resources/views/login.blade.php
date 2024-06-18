<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/favicon.svg')}}" type="image/x-icon">
    <title>Laracamp Login</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased flex flex-col items-center justify-center py-10 md:py-20 overflow-scroll scrollbar lg:h-screen">

    <div class="flex flex-col gap-10 p-3 w-full xs:w-96">

        <div class="flex flex-col gap-6">
            <a href="{{route('home_page')}}" class="self-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16" viewBox="0 0 100 100" fill="none">
                    <path d="M0 50C0 22.3858 22.3858 0 50 0C77.6142 0 100 22.3858 100 50C100 77.6142 77.6142 100 50 100C22.3858 100 0 77.6142 0 50Z" fill="#1E1E1E" />
                    <path d="M38.4375 65L43.2102 35.9091H47.7557L42.983 65H38.4375ZM25.4119 57.7841L26.1648 53.2386H48.892L48.1392 57.7841H25.4119ZM28.2102 65L32.983 35.9091H37.5284L32.7557 65H28.2102ZM27.0739 47.6705L27.8409 43.125H50.5682L49.8011 47.6705H27.0739ZM53.505 65V35.9091H59.6555V59.929H72.1271V65H53.505Z" fill="white" />
                </svg>
            </a>

            <div class="flex flex-col gap-2">
                <h1 class="text-2xl xs:text-3xl font-semibold tracking-tight">Sign in to your account</h1>
                <p class="">
                    <span>Not a member?</span>
                    <a href="{{route('register_page')}}" class="font-medium hover:underline">Register here</a>
                </p>
            </div>
        </div>

        <form action="{{route('authenticate')}}" class="flex flex-col gap-4" method="post">
            @csrf
            <div class="flex flex-col gap-2">
                <label for="email" class="font-medium cursor-pointer self-start">Email Address</label>
                <input type="text" id="email" name="email" class="rounded border-2 p-2" value="{{old('email')}}">
                @error('email') <p class="text-red-500 font-medium text-sm">{{$message}}</p> @enderror
            </div>
            <div class="flex flex-col gap-2">
                <div class="flex justify-between">
                    <label for="password" class="font-medium cursor-pointer">Password</label>
                    <a href="#" class="font-semibold text-sm hover:underline">Forgot Password?</a>
                </div>
                <input type="password" id="password" name="password" class="rounded border-2 p-2">
                @error('password') <p class="text-red-500 font-medium text-sm">{{$message}}</p> @enderror
            </div>
            <button class="btn-black">Sign in</button>
        </form>

        <div class="flex flex-col gap-4">
            <div class="flex justify-between items-center gap-2">
                <span class="border-t w-1/2"></span>
                <p class="text-center min-w-fit ">Continue With</p>
                <span class="border-t w-1/2"></span>
            </div>

            <div class="flex justify-between items-center gap-2">
                <a href="{{route('google_redirect')}}" class="flex-1 flex items-center justify-center gap-3 border-2 rounded p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6" viewBox="-0.5 0 48 48" version="1.1">
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
                    <span class="font-medium">Google</span>
                </a>

                <a href="#" class="flex-1 flex items-center justify-center gap-3 border-2 rounded p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6" viewBox="0 0 20 20" version="1.1">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)" fill="#000000">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="font-medium">Github</span>
                </a>
            </div>
        </div>

    </div>

</body>

</html>