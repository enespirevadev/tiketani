<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TIKETANI</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/css/home.css', 'resources/js/home.js'])

</head>

<body class="antialiased">
    @include('home.header')


    @if (isset($checkoutStatus))
        @if ($checkoutStatus == 'success')
            <div class="mb-4 rounded-lg bg-success-100 px-6 py-5 text-base text-success-700" role="alert">
                Your Order was successfully created!

                Order Number: {{ $order->order_number }}
            </div>
        @elseif ($checkoutStatus == 'failed')
            <div class="mb-4 rounded-lg bg-danger-100 px-6 py-5 text-base text-danger-700" role="alert">
                There was an Error processing your order, please try again or contact us directly.
            </div>
        @endif
    @endif

    <div
        class="relative p-6 sm:flex min-h-screen bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="shadow-sm rounded-lg divide-y">
            <a name="events"></a>
            <h2 class="text-2xl font-black">All upcoming Football Events</h2>
            
            @include('home.filters')
            @include('home.listing')
        </div>

    </div>

    <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />

    <div class="shadow-sm rounded-lg divide-y">
        <div class="bg-gray-100 p-8 rounded-lg shadow-md">
            <a name="about"></a>
            <h1 class="text-4xl font-bold text-gray-800 mb-4">TIKETANI: Your Go-To Football Ticketing Platform</h1>

            <p class="text-gray-600 mb-6">
                When it comes to securing football tickets in Kosovo, TIKETANI stands as the undisputed go-to platform
                for the Kosovo football community. We're more than just a ticket marketplace; we're a passionate part of
                your football journey.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-4 bg-white rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Why Choose TIKETANI?</h2>
                    <p class="text-gray-600">
                        - Comprehensive match coverage: From local league games to international tournaments, we've got
                        you covered.<br>
                        - User-friendly interface: Our platform is designed with fans in mind, making ticketing a
                        breeze.<br>
                        - Secure transactions: Your safety is our priority; all transactions are handled with the utmost
                        security.<br>
                        - Transparent pricing: No hidden fees or surprises; we provide clear pricing details.<br>
                        - Dedicated customer support: Our team is always ready to assist you with any inquiries or
                        concerns.<br>
                        - Exclusive offers and promotions: Enjoy special deals to enhance your football experience.<br>
                    </p>
                </div>

                <div class="p-4 bg-white rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Community Engagement</h2>
                    <p class="text-gray-600">
                        TIKETANI isn't just a ticket marketplace; it's a thriving community within the Kosovo football
                        scene. Connect with fellow fans, share your passion, and stay updated on the latest news and
                        events. Our platform is more than just tickets; it's a place to celebrate the beautiful game
                        together.
                    </p>
                </div>
            </div>

            <div class="mt-6">
                <a href="#"
                    class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600 transition duration-300 inline-block">
                    Learn More
                </a>
            </div>
        </div>

    </div>

    <script src="https://cdn.tailwindcss.com/3.3.0"></script>

</body>

</html>
