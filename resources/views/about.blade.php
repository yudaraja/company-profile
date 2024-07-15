@extends('app')

@section('title', 'About')

@section('content')

<section id="home" class="pt-20 min-h-screen flex">
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full p-4">
                <div class="text-center">
                    {{-- text diatas about --}}
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        About <span
                            class="underline underline-offset-3 decoration-8 decoration-green-300 dark:decoration-green-300">Us</span>
                    </h1>
                    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Lorem ipsum dolor sit
                        amet consectetur adipisicing elit. Quis ex quae eum!</p>
                </div>

                {{-- foto pertama --}}
                <div class="flex justify-center">
                    <img src="{{ asset('image/gambar-home.jpg') }}" alt="" class="mt-12 rounded-md md:w-1/2">
                </div>

                {{-- text --}}
                <div class="md:p-16">
                    <p class="text-gray-500 dark:text-gray-400 mt-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti fugiat, quam harum placeat
                        odio at quis quos quaerat rem natus, doloribus, sed mollitia. Quibusdam inventore ipsum incidunt
                        officia praesentium. Voluptatem, reiciendis. Iusto dignissimos neque quisquam dolore ullam
                        aperiam quis officiis ea magni. Quam odit velit enim placeat eligendi vel quae commodi eius iste
                        ut.
                    </p>
                    <blockquote
                        class="p-4 my-4 border-s-4 border-gray-300 bg-gray-50 dark:border-gray-500 dark:bg-gray-800">
                        <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">"Lorem ipsum
                            dolor sit amet consectetur, adipisicing elit. Velit porro reprehenderit voluptatum, dicta
                            maiores doloribus voluptates ipsam obcaecati voluptas, earum, modi error quo provident."</p>
                    </blockquote>
                    <p class="text-gray-500 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, provident? Accusamus
                        consequatur nesciunt officia eveniet consequuntur, et suscipit excepturi qui mollitia
                        praesentium, earum doloribus possimus sed non ipsum quam optio cumque. Maxime iste soluta non
                        totam nemo natus incidunt vero exercitationem illo quam necessitatibus laboriosam molestiae
                        sequi, neque id praesentium iure repellat, voluptatum error unde dolore dolores autem laborum
                        eaque. Nulla, assumenda.
                    </p>
                </div>

                {{-- foto kedua --}}
                <div class="flex justify-center">
                    <img src="{{ asset('image/rapat.jpg') }}" alt="" class="mt-4 rounded-md md:w-1/2">
                </div>

                {{-- text --}}
                <p class="text-gray-500 dark:text-gray-400 md:p-16">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae accusamus delectus suscipit,
                    accusantium quod eveniet quasi? Amet totam nesciunt nulla molestiae magnam laboriosam ratione quis
                    dicta tempora, distinctio nihil cumque, accusamus ipsam! Soluta delectus exercitationem cumque,
                    iusto nisi quisquam repellat ipsum velit accusantium numquam officiis itaque iure voluptatibus. Quos
                    maxime unde voluptate rerum sapiente?
                </p>

                {{-- quotes --}}
                <figure class="max-w-screen-md mx-auto text-center mt-8">
                    <svg class="w-6 h-6 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                    <blockquote>
                        <p class="text-md italic font-medium text-gray-900 dark:text-white">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Eveniet nobis nulla inventore temporibus. Ad doloribus
                            assumenda rerum nesciunt porro laboriosam iusto ab omnis facere cumque quam eos dignissimos,
                            voluptate delectus ducimus earum blanditiis? Vero excepturi minima suscipit, veniam ipsa
                            exercitationem.</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                        <img class="w-6 h-6 rounded-full" src="/image/user.png" alt="profile picture">
                        <div
                            class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                            <cite class="pe-3 font-medium text-gray-900 dark:text-white">Yuda Raja Ardenta</cite>
                            <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO company-profile</cite>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
@endsection
