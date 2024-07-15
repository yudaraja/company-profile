<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            {{-- nama/logo company --}}
            <div class="px-4">
                <a href="/" class="font-bold text-primary block px-8 py-6 md:ml-12">🍀 Company Profile</a>
            </div>
            {{-- items center vertikal, justify center horizontal --}}
            <div class="flex items-center md:mr-0">
                <button id="hamburger" name="hamburger" type="button" class="lg:hidden block absolute right-10">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left "></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left "></span>
                </button>

                {{-- item menu --}}
                <nav id="nav-menu"
                    class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:right-2 md:mr-8">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/" class="text-base text-black py-2 mx-8  flex group-hover:text-blue-500">Home</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('about') }}"
                                class="text-base text-black py-2 mx-8  flex group-hover:text-blue-500">About</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('layanan') }}"
                                class="text-base text-black py-2 mx-8  flex group-hover:text-blue-500">Layanan</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('contact') }}"
                                class="text-base text-black py-2 mx-8  flex group-hover:text-blue-500">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
