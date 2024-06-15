<?php

use function Livewire\Volt\{state};

//

?>

<header class="flex flex-col px-5 py-4 md:px-8">

    <div class="flex flex-col relative" x-data="{ toggle() { $refs.menu.classList.toggle('hidden'); $refs.menu.classList.toggle('flex');} }">
        <div class="flex justify-between items-center">

            <!-- Logo -->
            <a href="{{route('home_page')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10" viewBox="0 0 100 100" fill="none">
                    <path d="M0 50C0 22.3858 22.3858 0 50 0C77.6142 0 100 22.3858 100 50C100 77.6142 77.6142 100 50 100C22.3858 100 0 77.6142 0 50Z" fill="#1E1E1E" />
                    <path d="M38.4375 65L43.2102 35.9091H47.7557L42.983 65H38.4375ZM25.4119 57.7841L26.1648 53.2386H48.892L48.1392 57.7841H25.4119ZM28.2102 65L32.983 35.9091H37.5284L32.7557 65H28.2102ZM27.0739 47.6705L27.8409 43.125H50.5682L49.8011 47.6705H27.0739ZM53.505 65V35.9091H59.6555V59.929H72.1271V65H53.505Z" fill="white" />
                </svg>
            </a>

            <!-- Links -->
            <div class="hidden md:flex items-center gap-1 font-medium">

                <a href="{{route('home_page')}}" class="flex items-center gap-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 stroke-black" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none">
                        <path d="M52,27.18V52.76a2.92,2.92,0,0,1-3,2.84H15a2.92,2.92,0,0,1-3-2.84V27.17" />
                        <polyline points="26.26 55.52 26.26 38.45 37.84 38.45 37.84 55.52" />
                        <path d="M8.44,19.18s-1.1,7.76,6.45,8.94a7.17,7.17,0,0,0,6.1-2A7.43,7.43,0,0,0,32,26a7.4,7.4,0,0,0,5,2.49,11.82,11.82,0,0,0,5.9-2.15,6.66,6.66,0,0,0,4.67,2.15,8,8,0,0,0,7.93-9.3L50.78,9.05a1,1,0,0,0-.94-.65H14a1,1,0,0,0-.94.66Z" />
                        <line x1="8.44" y1="19.18" x2="55.54" y2="19.18" />
                        <line x1="21.04" y1="19.18" x2="21.04" y2="8.4" />
                        <line x1="32.05" y1="19.18" x2="32.05" y2="8.4" />
                        <line x1="43.01" y1="19.18" x2="43.01" y2="8.4" />
                    </svg>
                    <span>Larastore</span>
                </a>
            </div>

            <!-- Menu Toggle BTN -->
            <button class="xs:block md:hidden" @click="toggle">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 stroke-black" viewBox="0 0 24 24" fill="none">
                    <path d="M8 12H8.00901M12.0045 12H12.0135M15.991 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="currentColor" stroke-width="1.5" />
                </svg>
            </button>

            <!-- Auth Status Btns -->
            @auth
            <a href="{{route('login_page')}}" class="hidden md:flex items-center gap-1 font-medium">
                <span>Logout</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 stroke-black" viewBox="0 0 24 24" fill="none">
                    <path d="M10 12H20M20 12L17 9M20 12L17 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M4 12C4 7.58172 7.58172 4 12 4M12 20C9.47362 20 7.22075 18.8289 5.75463 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </a>
            @else
            <a href="{{route('login_page')}}" class="hidden md:flex items-center gap-1 font-medium">
                <span>Login</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 stroke-black" viewBox="0 0 24 24" fill="none">
                    <path d="M20 12C20 7.58172 16.4183 4 12 4M12 20C14.5264 20 16.7792 18.8289 18.2454 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M4 12H14M14 12L11 9M14 12L11 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            @endauth

        </div>

        <!-- Menu -->
        <div class="hidden md:hidden fixed w-44 xs:w-64 sm:w-72 md:w-96 top-0 right-0 flex-col gap-4 px-5 py-4 text-lg font-medium border-l h-full bg-white" x-ref="menu">

            <div class="flex justify-end sm:justify-between items-center">

                <!-- Logo -->
                <a href="{{route('home_page')}}" class="hidden sm:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10" viewBox="0 0 100 100" fill="none">
                        <path d="M0 50C0 22.3858 22.3858 0 50 0C77.6142 0 100 22.3858 100 50C100 77.6142 77.6142 100 50 100C22.3858 100 0 77.6142 0 50Z" fill="#1E1E1E" />
                        <path d="M38.4375 65L43.2102 35.9091H47.7557L42.983 65H38.4375ZM25.4119 57.7841L26.1648 53.2386H48.892L48.1392 57.7841H25.4119ZM28.2102 65L32.983 35.9091H37.5284L32.7557 65H28.2102ZM27.0739 47.6705L27.8409 43.125H50.5682L49.8011 47.6705H27.0739ZM53.505 65V35.9091H59.6555V59.929H72.1271V65H53.505Z" fill="white" />
                    </svg>
                </a>

                <!-- Menu Toggle BTN -->
                <button class="xs:block md:hidden" @click="toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10" viewBox="-0.5 0 25 25" fill="none">
                        <path d="M19 3.32001H16C14.8954 3.32001 14 4.21544 14 5.32001V8.32001C14 9.42458 14.8954 10.32 16 10.32H19C20.1046 10.32 21 9.42458 21 8.32001V5.32001C21 4.21544 20.1046 3.32001 19 3.32001Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 3.32001H5C3.89543 3.32001 3 4.21544 3 5.32001V8.32001C3 9.42458 3.89543 10.32 5 10.32H8C9.10457 10.32 10 9.42458 10 8.32001V5.32001C10 4.21544 9.10457 3.32001 8 3.32001Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 14.32H16C14.8954 14.32 14 15.2154 14 16.32V19.32C14 20.4246 14.8954 21.32 16 21.32H19C20.1046 21.32 21 20.4246 21 19.32V16.32C21 15.2154 20.1046 14.32 19 14.32Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 14.32H5C3.89543 14.32 3 15.2154 3 16.32V19.32C3 20.4246 3.89543 21.32 5 21.32H8C9.10457 21.32 10 20.4246 10 19.32V16.32C10 15.2154 9.10457 14.32 8 14.32Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

            </div>

            <div class="flex flex-col gap-2">

                <!-- Menu Links -->
                <a href="{{route('home_page')}}" class="flex items-center gap-2 hover:bg-neutral-200 p-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 stroke-black" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none">
                        <path d="M52,27.18V52.76a2.92,2.92,0,0,1-3,2.84H15a2.92,2.92,0,0,1-3-2.84V27.17" />
                        <polyline points="26.26 55.52 26.26 38.45 37.84 38.45 37.84 55.52" />
                        <path d="M8.44,19.18s-1.1,7.76,6.45,8.94a7.17,7.17,0,0,0,6.1-2A7.43,7.43,0,0,0,32,26a7.4,7.4,0,0,0,5,2.49,11.82,11.82,0,0,0,5.9-2.15,6.66,6.66,0,0,0,4.67,2.15,8,8,0,0,0,7.93-9.3L50.78,9.05a1,1,0,0,0-.94-.65H14a1,1,0,0,0-.94.66Z" />
                        <line x1="8.44" y1="19.18" x2="55.54" y2="19.18" />
                        <line x1="21.04" y1="19.18" x2="21.04" y2="8.4" />
                        <line x1="32.05" y1="19.18" x2="32.05" y2="8.4" />
                        <line x1="43.01" y1="19.18" x2="43.01" y2="8.4" />
                    </svg>
                    <span>Larastore</span>
                </a>

                <!-- Auth Status -->
                @auth
                <a href="{{route('login_page')}}" class="flex items-center gap-2 hover:bg-neutral-200 p-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 stroke-black" viewBox="0 0 24 24" fill="none">
                        <path d="M10 12H20M20 12L17 9M20 12L17 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 12C4 7.58172 7.58172 4 12 4M12 20C9.47362 20 7.22075 18.8289 5.75463 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <span>Logout</span>
                </a>
                @else
                <a href="{{route('login_page')}}" class="flex items-center gap-2 hover:bg-neutral-200 p-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 stroke-black" viewBox="0 0 24 24" fill="none">
                        <path d="M20 12C20 7.58172 16.4183 4 12 4M12 20C14.5264 20 16.7792 18.8289 18.2454 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M4 12H14M14 12L11 9M14 12L11 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Login</span>
                </a>
                @endauth

            </div>

        </div>

    </div>
</header>