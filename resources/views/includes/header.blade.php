<nav class="px-4 mx-auto max-w-screen-2xl lg:px-24 py-5">
    <div class="flex flex-col w-full lg:flex-row lg:items-center justify-center">
        <div class="flex items-center justify-between">
            <!-- LOGO -->
            <div class="text-2xl text-white font-bold flex inline-flex items-center"><span>ITECS</span></div>
            <!-- RESPONSIVE NAVBAR BUTTON TOGGLER -->
            <div>
                <button class="block p-1 focus:outline-none lg:hidden mobile-menu-button" data-target="#navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-7 h-7" x-show="!showMenu" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16">
                        </path>
                        <path stroke-linecap="round" class="hidden w-7 h-7" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex hidden w-full mobile-menu lg:block" id="navigation">
            <div class="flex flex-col flex-grow items-baseline mt-6 lg:flex-row lg:items-center lg:mt-0 w-full">
                <div
                    class="flex flex-col text-base font-medium text-white lg:flex-row w-max lg:mx-auto lg:text-center lg:gap-9 gap-4">
                    <a href="/" class="py-1 mx-2 lg:mx-auto lg:pl-0">Home</a>
                    <a href="/about" class="py-1 mx-2 lg:mx-auto lg:pl-0">About</a>
                    <a href="/announcement" class="py-1 mx-2 lg:mx-auto lg:pl-0">Announcement</a>
                    <a href="/archives" class="py-1 mx-2 lg:mx-auto lg:pl-0">Archives</a>
                    <a href="/contact" class="py-1 mx-2 lg:mx-auto lg:pl-0">Contact</a>
                    <a href="/editorial" class="py-1 mx-2 lg:mx-auto lg:pl-0">Editorial Board</a>
                </div>
                <div class="inline-flex gap-7 w-full px-3 mt-4 lg:mt-0 lg:w-max lg:px-0">
                    <a href="/login"
                        class="px-5 py-3 text-center rounded-lg flex lg:mx-auto bg-transparent transition ease-out duration-200 hover:bg-white hover:bg-opacity-30">
                        <span class="text-base w-full font-normal text-white">Login</span>
                    </a>
                    <a href="/register"
                        class="px-5 py-3 text-center rounded-lg flex lg:mx-auto bg-white transition ease-out duration-200 hover:bg-white hover:bg-opacity-90">
                        <span class="text-base w-full font-semibold text-dark-1">Register</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</nav>

<!--<div class="flex justify-between pb-4">
    <div>
        <img class="w-auto h-28" src="/images/logo-itech.png" alt="">
    </div>
</div>-->
