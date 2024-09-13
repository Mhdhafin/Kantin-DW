<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RM Dharma Wanita | {{ $title }}</title>



    {{-- Alpine Js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">


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

<body>
    <x-error></x-error>


    <main class="block md:hidden">
        {{ $slot }}
        <x-botnav></x-botnav>
    </main>



    <script src="./assets/js/script.js"></script>
</body>

</html>
