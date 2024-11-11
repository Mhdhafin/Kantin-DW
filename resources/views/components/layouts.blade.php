<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kantin Dharma Wanita | {{ $title }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Custom Css --}}

    <link rel="stylesheet" href="./assets/css/style.css">

    {{-- Sweet alert --}}
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">


    {{-- Alpine Js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">




    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    {{-- <link rel="stylesheet" href="/assets/css/codebase.css">
    <script src="/assets/js/activator.js"></script> --}}


    {{-- CSS --}}
    <link rel="stylesheet" href="./assets/css/style.css">
    @vite('resources/css/app.css')
    <style>
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loader {
            border-top-color: transparent;
            animation: spin 1s linear infinite;
        }
    </style>
</head>

<body x-data="{ loading: false }" x-init="$nextTick(() => loading = false)">

    <main class="desktop">
        @include('partials.desktop')
    </main>

    <main class="mobile" x-show="!loading" x-cloak>
        <!-- Loader Element -->
        <div id="loading-overlay"
            class="fixed inset-0 z-50 flex md:hidden items-center justify-center bg-gray-900 bg-opacity-60">
            <div class="animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-white"></div>
        </div>
        {{ $slot }}
        <x-botnav></x-botnav>
    </main>



    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/custom.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/rellax@1.12.1/rellax.min.js"></script>
    <script>
        window.onload = function() {
            const userName = {{ Auth::user()->name }};


            swal.getPopup({
                title: "Selamat Datang!",
                text: `Hai, ${userName}! Selamat datang di halaman utama.`,
                icon: "success",
                button: "Oke"
            });
        };




        document.addEventListener('DOMContentLoaded', function() {
            new Rellax('.rellax');
        });
    </script>

</body>

</html>
