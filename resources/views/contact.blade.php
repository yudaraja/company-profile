@extends('app')

@section('title', 'Contact')

@section('content')

<section id="home" class="pt-28 min-h-screen flex flex-col">
    <div class="container mx-auto flex-grow">
        <div class="flex justify-center">
            <div class="w-full px-4 justify-stretch">

                {{-- text --}}
                <div
                    class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-3xl font-bold text-primary dark:text-white">Contact</h5>
                    <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Jika anda memiliki pertanyaan
                        terkait perusahaan kami, silahkan untuk menghubungi melalui kontak kami di bawah ini 😊.</p>

                    {{-- daftar contact --}}
                    <div
                        class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse md:mt-10">
                        {{-- WA --}}
                        <a href="/"
                            class="w-full sm:w-auto bg-gray-700 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                                data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path fill="currentColor"
                                    d="M380.9 97.1C339.2 55.4 283.4 32 224 32 100.3 32 2 130.3 2 254c0 46.5 12.3 91.8 35.7 131.3L2.4 480l97.5-33.4c37.7 20.9 80.7 32 124.1 32h.1c123.6 0 222.3-100.5 222.3-223.8 0-59.4-23.1-115.1-65.5-157.7zM224 439.8c-38.7 0-76.5-10.5-109.4-30.5l-7.8-4.7-58.1 19.9 19.9-57.3-5.1-8C43.5 329 32.5 292 32.5 254 32.5 142.8 112.8 62 224 62c49.9 0 96.8 19.4 132.2 54.7 35.3 35.3 54.8 82.3 54.8 132.6C411 351.1 324.8 439.8 224 439.8zm122.1-139.4c-6.7-3.4-39.4-19.4-45.5-21.6-6.1-2.2-10.5-3.4-14.9 3.4-4.4 6.7-17 21.6-20.9 26-3.8 4.4-7.6 5-14.3 1.7-6.7-3.4-28.2-10.3-53.7-32.8-19.8-17.6-33.2-39.3-37.1-46-3.8-6.7-.4-10.3 2.9-13.6 3-3 6.7-7.6 10-11.4 3.4-3.8 4.4-6.7 6.7-11.1 2.2-4.4 1.1-8.2-.5-11.4-1.6-3.4-14.9-35.8-20.5-49.2-5.4-13-10.8-11.3-14.9-11.5l-12.7-.2c-4.4 0-11.5 1.7-17.5 8.2-6.1 6.7-23 22.5-23 55.2 0 32.7 23.6 64.3 26.9 68.7 3.4 4.4 46.4 70.8 112.3 99.3 15.7 6.8 28 10.8 37.5 13.8 15.7 5 30 4.3 41.3 2.6 12.6-1.9 39-15.9 44.5-31.2 5.4-15.3 5.4-28.4 3.8-31-1.6-2.6-6.1-3.8-12.8-7.3z">
                                </path>
                            </svg>

                            <div class="text-left rtl:text-right">
                                <div class="mb-1 text-xs">+62 8123 4567 89</div>
                                <div class="-mt-1 font-sans text-sm font-semibold">WhatsApp</div>
                            </div>

                        </a>
                        {{-- IG --}}
                        <a href="/"
                            class="w-full sm:w-auto bg-gray-700 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                                data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path fill="currentColor"
                                    d="M224.1 141c-63.6 0-115.1 51.5-115.1 115.1S160.5 371.3 224.1 371.3 339.2 319.8 339.2 256.1 287.7 141 224.1 141zm0 190.3c-41.5 0-75.2-33.7-75.2-75.2s33.7-75.2 75.2-75.2 75.2 33.7 75.2 75.2-33.7 75.2-75.2 75.2zm146.4-194.3c0 14.9-12.1 27-27 27s-27-12.1-27-27 12.1-27 27-27 27 12.1 27 27zm76.1 27.2c-1.7-35.7-9.9-67.3-36.2-92.7-26.3-26.3-57-34.5-92.7-36.2-36.5-2.1-146-2.1-182.5 0-35.7 1.7-67.3 9.9-92.7 36.2-26.3 26.3-34.5 57-36.2 92.7-2.1 36.5-2.1 146 0 182.5 1.7 35.7 9.9 67.3 36.2 92.7 26.3 26.3 57 34.5 92.7 36.2 36.5 2.1 146 2.1 182.5 0 35.7-1.7 67.3-9.9 92.7-36.2 26.3-26.3 34.5-57 36.2-92.7 2.1-36.5 2.1-146 0-182.5zm-48.1 230.3c-7.8 19.6-22.9 34.7-42.5 42.5-29.4 11.7-99.1 9-132.9 9s-103.5 2.6-132.9-9c-19.6-7.8-34.7-22.9-42.5-42.5-11.7-29.4-9-99.1-9-132.9s-2.6-103.5 9-132.9c7.8-19.6 22.9-34.7 42.5-42.5 29.4-11.7 99.1-9 132.9-9s103.5-2.6 132.9 9c19.6 7.8 34.7 22.9 42.5 42.5 11.7 29.4 9 99.1 9 132.9s2.6 103.5-9 132.9z">
                                </path>
                            </svg>

                            <div class="text-left rtl:text-right">
                                <div class="mb-1 text-xs">@companyprofile</div>
                                <div class="-mt-1 font-sans text-sm font-semibold">Instagram</div>
                            </div>

                        </a>
                        {{-- Email --}}
                        <a href="/"
                            class="w-full sm:w-auto bg-gray-700 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            <svg class="w-7 h-7 text-white mr-2 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M3 6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-6.616l-2.88 2.592C8.537 20.461 7 19.776 7 18.477V17H5a2 2 0 0 1-2-2V6Zm4 2a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2H7Zm8 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2Zm-8 3a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm5 0a1 1 0 1 0 0 2h5a1 1 0 1 0 0-2h-5Z"
                                    clip-rule="evenodd" />
                            </svg>


                            <div class="text-left rtl:text-right">
                                <div class="mb-1 text-xs">companyprofile.com</div>
                                <div class="-mt-1 font-sans text-sm font-semibold">Email</div>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
