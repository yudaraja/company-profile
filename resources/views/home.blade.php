@extends('app')

@section('title', 'Home')

@section('content')

{{-- pesan error --}}
@if ($errors->any())
<div id="toast-danger"
    class="fixed bottom-5 right-5 z-30 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
    role="alert">
    <div
        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
        </svg>
        <span class="sr-only">Error icon</span>
    </div>
    <div class="ms-3 text-sm font-normal">
        Gagal!
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
    </div>
    <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
        data-dismiss-target="#toast-danger" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
@endif

{{-- pesan berhasil menambahkan feedback --}}
@session('success')
<div id="toast-success"
    class="fixed bottom-5 right-5 z-30 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
    role="alert">
    <div
        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
        </svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ms-3 text-sm font-normal">{{ $value }}</div>
    <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
        data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
@endsession

<section class="bg-white mt-24 pt-36 md:pt-16 dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">

        <a href="/about"
            class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
            <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">New!</span> <span
                class="text-sm font-medium">Informasi tentang perusahaan kami</span>
            <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
        </a>
        <h1
            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-5xl dark:text-white">
            Selamat datang di Company Profile 🚀</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">Lorem ipsum
            dolor sit amet consectetur adipisicing elit. Voluptatibus quis dolor rerum.</p>
    </div>
    <div
        class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0">
    </div>
</section>


<section id="home" class="pt-28 mt-24">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-12">

                {{-- text disamping slider foto --}}
                <div class="grid md:grid-cols-2">
                    <div class="mt-2">
                        <h1 class="text-md font-semibold text-primary">Halo, Selamat datang 👋</h1>
                        <h1
                            class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-5xl dark:text-white">
                            Company <span
                                class="underline underline-offset-3 decoration-8 decoration-green-300 dark:decoration-green-300">Profile</span>
                        </h1>
                        <p class="text-md mt-1 text-slate-600">Information Technology</p>
                        <p class="mt-12 text-md text-slate-600 md:col-start-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem atque illo praesentium quas
                            necessitatibus aliquam minus cum veritatis nesciunt! Qui magni possimus libero, eaque saepe
                            reiciendis sequi dolore, minima excepturi ducimus quas.
                        </p>
                    </div>

                    {{-- slider foto --}}
                    <div id="gallery" class="relative w-full mt-4 md:mt-0 md:ml-8 shadow-sm z-10" data-carousel="slide">
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/image/company.jpg"
                                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <img src="/image/rapat.jpg"
                                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="image/gambar-home.jpg"
                                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="">
                            </div>
                        </div>

                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>

                {{-- garis --}}
                <hr class="my-24">

                {{-- text diatas carousel --}}
                <div class="text-center mt-20 md:mt-24">
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 lg:text-3xl dark:text-white">
                        Client <mark class="px-2 text-white bg-green-400 rounded dark:bg-blue-500">Feedback</mark></h1>
                    <p class="text-lg md:text-sm font-normal text-gray-500 lg:text-lg dark:text-gray-400">Terima kasih
                        atas kerja sama dan feedback yang telah diberikan.</p>

                </div>

                {{-- carousel feedback --}}
                <div
                    class="grid mt-12 mb-8 border border-gray-200 rounded-lg dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
                    @foreach ($feedbacks as $feedback)
                    <figure
                        class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
                        <div class="text-xs text-gray-500 dark:text-gray-400">
                            {{ $feedback->created_at->format('D' . ', ' . 'd M Y') }}
                        </div>
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-green-700 dark:text-white md:text-lg">Feedback Client
                            </h3>
                            <p class="my-4">{{ $feedback->feedback }}</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center ">
                            <img class="rounded-full w-9 h-9" src="/image/user.png" alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                                <div>{{ $feedback->name }}</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400 ">{{ $feedback->email }}</div>
                            </div>
                        </figcaption>
                    </figure>
                    @endforeach
                </div>

                {{-- form feedback --}}
                <div class="mt-12 border p-8 rounded-md">
                    <h1 class="text-center font-bold text-primary md:text-4xl">Form Feedback</h1>
                    <form class="mt-6" action="{{ route('feedback') }}" method="POST">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-1">
                            <div class="">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                <input type="text" id="name" name="name" aria-describedby="outlined_error_help"
                                    class="form-control  @error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan nama anda" required />
                                @error('name')
                                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                        class="font-medium"></span> {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                                </label>
                                <input type="email" id="email" name="email"
                                    class="form-control  @error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan email anda" required />
                                @error('email')
                                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                        class="font-medium"></span> {{ $message }}</p>
                                @enderror
                            </div>

                            <label for="message"
                                class="block text-sm font-medium text-gray-900 dark:text-white">Feedback anda</label>
                            <textarea id="message" rows="4" name="feedback"
                                class="form-control  @error('feedback') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pesan feedback"></textarea>
                            @error('feedback')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium"></span> {{ $message }}</p>
                            @enderror

                            <button type="submit"
                                class="text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
