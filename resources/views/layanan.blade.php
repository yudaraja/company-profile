@extends('app')

@section('title', 'Layanan')

@section('content')

<section id="home" class="pt-20 min-h-screen flex">
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full px-4 justify-stretch">

                {{-- text diatas card layanan --}}
                <div class="p-8">
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        Layanan <span
                            class="underline underline-offset-3 decoration-8 decoration-green-300 dark:decoration-blue-600">perusahaan
                            kami</span></h1>
                    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Di bawah ini adalah
                        layanan yang kami tawarkan kepada customer, kami pastikan bahwa kebutuhan customer terpenuhi
                        ketika menggunakan jasa kami 😁.</p>
                </div>

                {{-- card layanan --}}
                <div class="grid justify-items-center grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:mt-10">
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <svg class="w-7 h-7 text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                clip-rule="evenodd" />
                        </svg>
                        <a>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Kemitraan
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Consequatur perspiciatis iure suscipit.</p>
                    </div>

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <svg class="w-7 h-7 text-red-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11 9a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" />
                            <path fill-rule="evenodd"
                                d="M9.896 3.051a2.681 2.681 0 0 1 4.208 0c.147.186.38.282.615.255a2.681 2.681 0 0 1 2.976 2.975.681.681 0 0 0 .254.615 2.681 2.681 0 0 1 0 4.208.682.682 0 0 0-.254.615 2.681 2.681 0 0 1-2.976 2.976.681.681 0 0 0-.615.254 2.682 2.682 0 0 1-4.208 0 .681.681 0 0 0-.614-.255 2.681 2.681 0 0 1-2.976-2.975.681.681 0 0 0-.255-.615 2.681 2.681 0 0 1 0-4.208.681.681 0 0 0 .255-.615 2.681 2.681 0 0 1 2.976-2.975.681.681 0 0 0 .614-.255ZM12 6a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"
                                clip-rule="evenodd" />
                            <path
                                d="M5.395 15.055 4.07 19a1 1 0 0 0 1.264 1.267l1.95-.65 1.144 1.707A1 1 0 0 0 10.2 21.1l1.12-3.18a4.641 4.641 0 0 1-2.515-1.208 4.667 4.667 0 0 1-3.411-1.656Zm7.269 2.867 1.12 3.177a1 1 0 0 0 1.773.224l1.144-1.707 1.95.65A1 1 0 0 0 19.915 19l-1.32-3.93a4.667 4.667 0 0 1-3.4 1.642 4.643 4.643 0 0 1-2.53 1.21Z" />
                        </svg>
                        <a>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Sertifikasi
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Eius aliquid exercitationem quam.</p>
                    </div>

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <svg class="w-7 h-7 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v15a1 1 0 0 0 1 1h15M8 16l2.5-5.5 3 3L17.273 7 20 9.667" />
                        </svg>
                        <a>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Magang
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Blanditiis magnam sunt error?</p>
                    </div>

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <svg class="w-7 h-7 text-slate-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Zm10 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-4-1a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V8ZM6 5a1 1 0 0 0-1 1v.027A5.001 5.001 0 0 1 9 5H6Zm12 5a1 1 0 0 0-1-1h-3a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-2Zm-1-3a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 9a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                        </svg>
                        <a>
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Pelatihan
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Itaque voluptatem a accusamus!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
