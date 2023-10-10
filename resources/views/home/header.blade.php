<header>

    {{-- @if (Route::has('login'))
            <div class="flex-auto w-90 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
    @endif --}}


    <!-- Navbar -->
    <nav class="sticky top-0 z-10 flex w-full items-center justify-between bg-yellow-200 py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"
        data-te-navbar-ref>
        <div class="px-6">
            <!-- Hamburger menu button -->
            <button
                class="border-0 bg-transparent px-2 py-3 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white md:hidden"
                type="button" data-te-collapse-init data-te-target="#navbarSupportedContentE"
                aria-controls="navbarSupportedContentE" aria-expanded="false" aria-label="Toggle navigation">

                <!-- Hamburger menu icon -->
                <span class="[&>svg]:w-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </span>
            </button>

            <!-- Navigation links -->
            <div class="!visible hidden grow basis-[100%] items-center md:!flex md:basis-auto"
                id="navbarSupportedContentE" data-te-collapse-item>
                <ul class="mr-auto flex flex-col md:flex-row" data-te-navbar-nav-ref>
                    <li class="text-right">
                        @include('components.logo')
                    </li>

                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white md:p-2 [&.active]:border-primary [&.active]:text-primary"
                            href="#!" data-te-nav-link-ref data-te-ripple-init
                            data-te-ripple-color="light">Home</a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white md:p-2 [&.active]:border-primary [&.active]:text-primary"
                            href="#!" data-te-nav-link-ref data-te-ripple-init
                            data-te-ripple-color="light">Events</a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white md:p-2 [&.active]:border-primary [&.active]:text-primary"
                            href="#!" data-te-nav-link-ref data-te-ripple-init
                            data-te-ripple-color="light">About</a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white md:p-2 [&.active]:border-primary [&.active]:text-primary "
                            href="#!" data-te-nav-link-ref data-te-ripple-init
                            data-te-ripple-color="light">Login/Registration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero section with background image, heading, subheading and button -->
    <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center"
        style="
        background-image: url('/images/jumbo.png');
        height: 400px;
      ">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.6)">
            <div class="flex h-full items-center justify-center">
                <div class="text-white">
                    <h2 class="mb-4 text-4xl font-semibold">TIKETANI - Your No #1 Marketplace for Football Events!</h2>
                    <h4 class="mb-6 text-xl font-semibold">See all upcoming events, buy your ticket and enjoy the game
                        of your favorite football team.</h4>

                    {{-- <button type="button"
                        class="rounded border-2 border-neutral-50 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                        data-te-ripple-init data-te-ripple-color="light">
                        Call to action
                    </button> --}}
                </div>
            </div>
        </div>
    </div>
</header>
