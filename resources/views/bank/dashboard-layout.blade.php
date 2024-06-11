<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/favicon.svg')}}" type="image/x-icon">
    <title>Larabank Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    <!-- Small Screen -->
    <div class="flex flex-col md:flex-row">

        <div class="flex flex-col bg-rb-green md:w-64">

            <div class="flex justify-between p-5 text-rb-green-light">
                <h2 class="text-2xl font-medium tracking-wider font-serif">RELAY</h2>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 cursor-pointer md:hidden" viewBox="0 0 24 24" fill="none" id="menu-btn-sm-screen">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 7.28595 22 4.92893 20.5355 3.46447C19.0711 2 16.714 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447ZM12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13ZM9 12C9 12.5523 8.55228 13 8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11C8.55228 11 9 11.4477 9 12ZM16 13C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11C15.4477 11 15 11.4477 15 12C15 12.5523 15.4477 13 16 13Z" fill="currentColor" />
                </svg>
            </div>

            <div class="flex flex-col invisible h-0 md:visible md:h-auto" id="menu-sm-screen">
                <a href="{{route('bank.dashboard_page')}}" class="flex items-center cursor-pointer p-5 @if(url()->current() == route('bank.dashboard_page')) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.1" d="M17.7218 8.08382L14.7218 5.29811C13.4309 4.09937 12.7854 3.5 12 3.5C11.2146 3.5 10.5691 4.09937 9.2782 5.29811L6.2782 8.08382C5.64836 8.66867 5.33345 8.96109 5.16672 9.34342C5 9.72575 5 10.1555 5 11.015V16.9999C5 18.8856 5 19.8284 5.58579 20.4142C6.17157 20.9999 7.11438 20.9999 9 20.9999H9.75V16.9999C9.75 15.7573 10.7574 14.7499 12 14.7499C13.2426 14.7499 14.25 15.7573 14.25 16.9999V20.9999H15C16.8856 20.9999 17.8284 20.9999 18.4142 20.4142C19 19.8284 19 18.8856 19 16.9999L19 11.015C19 10.1555 19 9.72575 18.8333 9.34342C18.6666 8.96109 18.3516 8.66866 17.7218 8.08382Z" fill="currentColor" />
                            <path d="M19 9L19 17C19 18.8856 19 19.8284 18.4142 20.4142C17.8284 21 16.8856 21 15 21L14 21L10 21L9 21C7.11438 21 6.17157 21 5.58579 20.4142C5 19.8284 5 18.8856 5 17L5 9" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            <path d="M3 11L7.5 7L10.6713 4.18109C11.429 3.50752 12.571 3.50752 13.3287 4.18109L16.5 7L21 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 21V17C10 15.8954 10.8954 15 12 15V15C13.1046 15 14 15.8954 14 17V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="font-medium">Home</span>
                    </div>
                </a>

                <button id="account-btn" class="flex items-center justify-between cursor-pointer p-5 @if(false) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 32 32" fill="none">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17L3 11l13-6 13 6-13 6z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15.5l13 6 13-6" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 20l13 6 13-6" />
                        </svg>
                        <span class="font-medium">Accounts</span>
                    </div>
                    <svg id="account-sign" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 rotate-90" viewBox="0 0 24 24" fill="none">
                        <path d="M12 19.5L7 14.5M12 19.5L17 14.5M12 19.5L12 13M12 9.5C12 7.83333 13 4.5 17 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div id="account-menu" class="invisible h-0 flex flex-col pl-5">
                    <a href="#" class="cursor-pointer p-3 @if(false) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">External Accounts</a>
                    <a href="#" class="cursor-pointer p-3 @if(false) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">Manage Accounts</a>

                    <button id="account-statement-btn" class="flex justify-between items-center p-3 hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra">
                        <span>Statements</span>
                        <svg id="account-statement-sign" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 rotate-90" viewBox="0 0 24 24" fill="none">
                            <path d="M12 19.5L7 14.5M12 19.5L17 14.5M12 19.5L12 13M12 9.5C12 7.83333 13 4.5 17 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div id="account-statement-menu" class="flex flex-col invisible h-0 pl-5">
                        <a href="{{route('bank.statement_page')}}" class="p-3 @if(url()->current() == route('bank.statement_page')) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">User Account</a>
                        <a href="#" class="p-3 @if(false) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">File Download</a>
                    </div>

                    <a href="#" class="cursor-pointer p-3 @if(false) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">Auto Transfer Rule</a>
                </div>

                <a href="#" class="flex items-center cursor-pointer p-5 @if(false) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7" viewBox="0 0 56 56">
                            <path d="M 9.6249 47.7109 L 46.3751 47.7109 C 51.2735 47.7109 53.7344 45.2969 53.7344 40.4687 L 53.7344 15.5547 C 53.7344 10.7266 51.2735 8.2891 46.3751 8.2891 L 9.6249 8.2891 C 4.7265 8.2891 2.2656 10.7266 2.2656 15.5547 L 2.2656 40.4687 C 2.2656 45.2969 4.7265 47.7109 9.6249 47.7109 Z M 6.0390 15.7656 C 6.0390 13.3281 7.3515 12.0625 9.6952 12.0625 L 46.3280 12.0625 C 48.6484 12.0625 49.9607 13.3281 49.9607 15.7656 L 49.9607 17.7344 L 6.0390 17.7344 Z M 9.6952 43.9375 C 7.3515 43.9375 6.0390 42.6953 6.0390 40.2578 L 6.0390 23.0547 L 49.9607 23.0547 L 49.9607 40.2578 C 49.9607 42.6953 48.6484 43.9375 46.3280 43.9375 Z M 12.3905 37.0000 L 18.1327 37.0000 C 19.5156 37.0000 20.4296 36.0859 20.4296 34.7500 L 20.4296 30.4140 C 20.4296 29.1015 19.5156 28.1640 18.1327 28.1640 L 12.3905 28.1640 C 11.0078 28.1640 10.0937 29.1015 10.0937 30.4140 L 10.0937 34.7500 C 10.0937 36.0859 11.0078 37.0000 12.3905 37.0000 Z" />
                        </svg>
                        <span class="font-medium">Cards</span>
                    </div>
                </a>

                <a href="#" class="flex items-center cursor-pointer p-5 @if(false) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475Z" fill="currentColor" />
                        </svg>
                        <span class="font-medium">Payments</span>
                    </div>
                </a>

                <a href="#" class="flex items-center cursor-pointer p-5 @if(false) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                            <path d="M12 13C14.6083 13 16.8834 13.8152 18.0877 15.024M15.5841 20.4366C14.5358 20.7944 13.3099 21 12 21C8.13401 21 5 19.2091 5 17C5 15.6407 6.18652 14.4398 8 13.717" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M18 18.5C18.3905 18.8905 18.6095 19.1095 19 19.5L21 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="font-medium">Teams</span>
                    </div>
                </a>

                <a href="#" class="flex items-center cursor-pointer p-5 @if(false) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92894 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92894 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z" fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9747 1.25C11.5303 1.24999 11.1592 1.24999 10.8546 1.27077C10.5375 1.29241 10.238 1.33905 9.94761 1.45933C9.27379 1.73844 8.73843 2.27379 8.45932 2.94762C8.31402 3.29842 8.27467 3.66812 8.25964 4.06996C8.24756 4.39299 8.08454 4.66251 7.84395 4.80141C7.60337 4.94031 7.28845 4.94673 7.00266 4.79568C6.64714 4.60777 6.30729 4.45699 5.93083 4.40743C5.20773 4.31223 4.47642 4.50819 3.89779 4.95219C3.64843 5.14353 3.45827 5.3796 3.28099 5.6434C3.11068 5.89681 2.92517 6.21815 2.70294 6.60307L2.67769 6.64681C2.45545 7.03172 2.26993 7.35304 2.13562 7.62723C1.99581 7.91267 1.88644 8.19539 1.84541 8.50701C1.75021 9.23012 1.94617 9.96142 2.39016 10.5401C2.62128 10.8412 2.92173 11.0602 3.26217 11.2741C3.53595 11.4461 3.68788 11.7221 3.68786 12C3.68785 12.2778 3.53592 12.5538 3.26217 12.7258C2.92169 12.9397 2.62121 13.1587 2.39007 13.4599C1.94607 14.0385 1.75012 14.7698 1.84531 15.4929C1.88634 15.8045 1.99571 16.0873 2.13552 16.3727C2.26983 16.6469 2.45535 16.9682 2.67758 17.3531L2.70284 17.3969C2.92507 17.7818 3.11058 18.1031 3.28089 18.3565C3.45817 18.6203 3.64833 18.8564 3.89769 19.0477C4.47632 19.4917 5.20763 19.6877 5.93073 19.5925C6.30717 19.5429 6.647 19.3922 7.0025 19.2043C7.28833 19.0532 7.60329 19.0596 7.8439 19.1986C8.08452 19.3375 8.24756 19.607 8.25964 19.9301C8.27467 20.3319 8.31403 20.7016 8.45932 21.0524C8.73843 21.7262 9.27379 22.2616 9.94761 22.5407C10.238 22.661 10.5375 22.7076 10.8546 22.7292C11.1592 22.75 11.5303 22.75 11.9747 22.75H12.0252C12.4697 22.75 12.8407 22.75 13.1454 22.7292C13.4625 22.7076 13.762 22.661 14.0524 22.5407C14.7262 22.2616 15.2616 21.7262 15.5407 21.0524C15.686 20.7016 15.7253 20.3319 15.7403 19.93C15.7524 19.607 15.9154 19.3375 16.156 19.1985C16.3966 19.0596 16.7116 19.0532 16.9974 19.2042C17.3529 19.3921 17.6927 19.5429 18.0692 19.5924C18.7923 19.6876 19.5236 19.4917 20.1022 19.0477C20.3516 18.8563 20.5417 18.6203 20.719 18.3565C20.8893 18.1031 21.0748 17.7818 21.297 17.3969L21.3223 17.3531C21.5445 16.9682 21.7301 16.6468 21.8644 16.3726C22.0042 16.0872 22.1135 15.8045 22.1546 15.4929C22.2498 14.7697 22.0538 14.0384 21.6098 13.4598C21.3787 13.1586 21.0782 12.9397 20.7378 12.7258C20.464 12.5538 20.3121 12.2778 20.3121 11.9999C20.3121 11.7221 20.464 11.4462 20.7377 11.2742C21.0783 11.0603 21.3788 10.8414 21.6099 10.5401C22.0539 9.96149 22.2499 9.23019 22.1547 8.50708C22.1136 8.19546 22.0043 7.91274 21.8645 7.6273C21.7302 7.35313 21.5447 7.03183 21.3224 6.64695L21.2972 6.60318C21.0749 6.21825 20.8894 5.89688 20.7191 5.64347C20.5418 5.37967 20.3517 5.1436 20.1023 4.95225C19.5237 4.50826 18.7924 4.3123 18.0692 4.4075C17.6928 4.45706 17.353 4.60782 16.9975 4.79572C16.7117 4.94679 16.3967 4.94036 16.1561 4.80144C15.9155 4.66253 15.7524 4.39297 15.7403 4.06991C15.7253 3.66808 15.686 3.2984 15.5407 2.94762C15.2616 2.27379 14.7262 1.73844 14.0524 1.45933C13.762 1.33905 13.4625 1.29241 13.1454 1.27077C12.8407 1.24999 12.4697 1.24999 12.0252 1.25H11.9747ZM10.5216 2.84515C10.5988 2.81319 10.716 2.78372 10.9567 2.76729C11.2042 2.75041 11.5238 2.75 12 2.75C12.4762 2.75 12.7958 2.75041 13.0432 2.76729C13.284 2.78372 13.4012 2.81319 13.4783 2.84515C13.7846 2.97202 14.028 3.21536 14.1548 3.52165C14.1949 3.61826 14.228 3.76887 14.2414 4.12597C14.271 4.91835 14.68 5.68129 15.4061 6.10048C16.1321 6.51968 16.9974 6.4924 17.6984 6.12188C18.0143 5.9549 18.1614 5.90832 18.265 5.89467C18.5937 5.8514 18.9261 5.94047 19.1891 6.14228C19.2554 6.19312 19.3395 6.27989 19.4741 6.48016C19.6125 6.68603 19.7726 6.9626 20.0107 7.375C20.2488 7.78741 20.4083 8.06438 20.5174 8.28713C20.6235 8.50382 20.6566 8.62007 20.6675 8.70287C20.7108 9.03155 20.6217 9.36397 20.4199 9.62698C20.3562 9.70995 20.2424 9.81399 19.9397 10.0041C19.2684 10.426 18.8122 11.1616 18.8121 11.9999C18.8121 12.8383 19.2683 13.574 19.9397 13.9959C20.2423 14.186 20.3561 14.29 20.4198 14.373C20.6216 14.636 20.7107 14.9684 20.6674 15.2971C20.6565 15.3799 20.6234 15.4961 20.5173 15.7128C20.4082 15.9355 20.2487 16.2125 20.0106 16.6249C19.7725 17.0373 19.6124 17.3139 19.474 17.5198C19.3394 17.72 19.2553 17.8068 19.189 17.8576C18.926 18.0595 18.5936 18.1485 18.2649 18.1053C18.1613 18.0916 18.0142 18.045 17.6983 17.8781C16.9973 17.5075 16.132 17.4803 15.4059 17.8995C14.68 18.3187 14.271 19.0816 14.2414 19.874C14.228 20.2311 14.1949 20.3817 14.1548 20.4784C14.028 20.7846 13.7846 21.028 13.4783 21.1549C13.4012 21.1868 13.284 21.2163 13.0432 21.2327C12.7958 21.2496 12.4762 21.25 12 21.25C11.5238 21.25 11.2042 21.2496 10.9567 21.2327C10.716 21.2163 10.5988 21.1868 10.5216 21.1549C10.2154 21.028 9.97201 20.7846 9.84514 20.4784C9.80512 20.3817 9.77195 20.2311 9.75859 19.874C9.72896 19.0817 9.31997 18.3187 8.5939 17.8995C7.86784 17.4803 7.00262 17.5076 6.30158 17.8781C5.98565 18.0451 5.83863 18.0917 5.73495 18.1053C5.40626 18.1486 5.07385 18.0595 4.81084 17.8577C4.74458 17.8069 4.66045 17.7201 4.52586 17.5198C4.38751 17.314 4.22736 17.0374 3.98926 16.625C3.75115 16.2126 3.59171 15.9356 3.4826 15.7129C3.37646 15.4962 3.34338 15.3799 3.33248 15.2971C3.28921 14.9684 3.37828 14.636 3.5801 14.373C3.64376 14.2901 3.75761 14.186 4.0602 13.9959C4.73158 13.5741 5.18782 12.8384 5.18786 12.0001C5.18791 11.1616 4.73165 10.4259 4.06021 10.004C3.75769 9.81389 3.64385 9.70987 3.58019 9.62691C3.37838 9.3639 3.28931 9.03149 3.33258 8.7028C3.34348 8.62001 3.37656 8.50375 3.4827 8.28707C3.59181 8.06431 3.75125 7.78734 3.98935 7.37493C4.22746 6.96253 4.3876 6.68596 4.52596 6.48009C4.66055 6.27983 4.74468 6.19305 4.81093 6.14222C5.07395 5.9404 5.40636 5.85133 5.73504 5.8946C5.83873 5.90825 5.98576 5.95483 6.30173 6.12184C7.00273 6.49235 7.86791 6.51962 8.59394 6.10045C9.31998 5.68128 9.72896 4.91837 9.75859 4.12602C9.77195 3.76889 9.80512 3.61827 9.84514 3.52165C9.97201 3.21536 10.2154 2.97202 10.5216 2.84515Z" fill="currentColor" />
                        </svg>
                        <span class="font-medium">Settings</span>
                    </div>
                </a>

                <a href="#" class="flex items-center cursor-pointer p-5 @if(false) bg-rb-green-dark text-rb-green-light @else hover:bg-rb-green-dark hover:text-rb-green-light text-rb-green-light-extra @endif">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none">
                            <path d="M14 19C17.7712 19 19.6569 19 20.8284 17.8284C22 16.6569 22 14.7712 22 11C22 7.22876 22 5.34315 20.8284 4.17157C19.6569 3 17.7712 3 14 3H10C6.22876 3 4.34315 3 3.17157 4.17157C2 5.34315 2 7.22876 2 11C2 14.7712 2 16.6569 3.17157 17.8284C3.82475 18.4816 4.69989 18.7706 6 18.8985" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 8.48352C10.5 7.49451 11 7 12 7C13.2461 7 14 7.98901 14 8.97802C14 9.96703 13.5 10.011 12 11V12M12 14.5V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            <path d="M14 19C12.7635 19 11.4022 19.4992 10.1586 20.145C8.16119 21.1821 7.16249 21.7007 6.67035 21.3703C6.1782 21.0398 6.27135 20.0151 6.45766 17.9657L6.5 17.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span class="font-medium">Support</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="flex flex-1">
            @yield('content')
        </div>
    </div>

</body>

<script>
    const menuBtnSmScreen = document.querySelector('#menu-btn-sm-screen');
    const menuSmScreen = document.querySelector('#menu-sm-screen');

    const accountBtn = document.querySelector('#account-btn');
    const accountMenu = document.querySelector('#account-menu');
    const accountSign = document.querySelector('#account-sign');

    const accountStatementBtn = document.querySelector('#account-statement-btn');
    const accountStatementMenu = document.querySelector('#account-statement-menu');
    const accountStatementSign = document.querySelector('#account-statement-sign');

    menuBtnSmScreen.addEventListener('click', () => {
        menuSmScreen.classList.toggle('invisible')
        menuSmScreen.classList.toggle('h-0')
    })

    function toggleAccountMenu() {
        accountMenu.classList.toggle('invisible')
        accountMenu.classList.toggle('h-0')
        accountSign.classList.toggle('rotate-90')
        accountSign.classList.toggle('-rotate-30')
    }

    function toggleAccountStatementMenu() {
        accountStatementMenu.classList.toggle('invisible')
        accountStatementMenu.classList.toggle('h-0')
        accountStatementSign.classList.toggle('rotate-90')
        accountStatementSign.classList.toggle('-rotate-30')
    }

    accountBtn.addEventListener('click', () => {
        toggleAccountMenu()
    })

    accountStatementBtn.addEventListener('click', () => {
        toggleAccountStatementMenu()
    })

    if (location.href == "{{route('bank.statement_page')}}") {
        toggleAccountMenu();
        toggleAccountStatementMenu()
    }
</script>

</html>