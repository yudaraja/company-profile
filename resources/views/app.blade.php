<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="http://example.com/favicon.png">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title') | Company Profile</title>
</head>

<body>
    <div class="transition-all duration-500 ease-in-out md:p-12">
        @include('partials.navbar')
        @yield('content')
    </div>

    {{-- footer --}}
    <footer class=" rounded-lg shadow bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:px-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">🍀 Company
                        Profile</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium  sm:mb-0 text-gray-400">
                    <li>
                        <a href="/" class="hover:underline me-4 md:me-6">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" class="hover:underline me-4 md:me-6">Layanan</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8" />
            <span class="block text-sm sm:text-center text-gray-400">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
