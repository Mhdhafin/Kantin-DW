<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kantin Dharma Wanita | {{ $title }}</title>



    {{-- <link rel="stylesheet" href="{{ asset('assets/css/codebase.css') }}">
    <script src="{{ asset('assets/js/activator.js') }}"></script> --}}

    <link rel="stylesheet" href="/assets/css/codebase.css">
    <script src="/assets/js/activator.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>


    {{-- Alpine Js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet"> --}}

    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @vite('resources/css/app.css')

    <style>
        .desktop {
            display: block;
            /* Tampilkan elemen desktop secara default */
        }

        .mobile {
            display: none;
            /* Sembunyikan elemen mobile secara default */
        }

        /* Media query untuk tampilan mobile */
        @media (max-width: 768px) {

            /* Atur lebar ini sesuai kebutuhan */
            .desktop {
                display: none;
                /* Sembunyikan elemen desktop di mobile */
            }

            .mobile {
                display: block;
                /* Tampilkan elemen mobile di mobile */
            }
        }
    </style>
</head>

<body>


    {{-- Desktop --}}
    <main class="desktop">
        @include('partials.desktop')
    </main>


    {{-- Mobile --}}
    <main class="mobile">
        <section class="max-w-xl px-4">
            @include('partials.mobile')
        </section>
    </main>


    <script src="/assets/js/script.js"></script>

</body>

</html>
