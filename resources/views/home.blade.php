<x-layouts>
    <x-slot name="title">{{ $title }}</x-slot>

    <!-- Loader Element -->
    {{-- <div id="loading-overlay"
            class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-60 hidden">
            <div class="animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-white"></div>
        </div> --}}

    <!-- Konten Utama -->
    <main class="block md:hidden" x-show="!loading" x-cloak>


        <nav class="px-5 bg-white shadow-lg py-5 rounded-b-[20px] sticky top-0 z-50" x-data="{ openModal: false }">
            <div class="float-end flex flex-row-reverse gap-4">
                <a href="/my-cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                    </svg>
                </a>
                <div x-on:click="openModal = !openModal" class="cursor-pointer">
                    <img class="w-7 h-7 rounded-full" src="https://avatars.githubusercontent.com/u/110374556?v=4"
                        alt="">
                </div>
            </div>
            <header class="font-bold font-mulish">
                <h1 class=" text-[32px] text-">Koperasi</h1>
                <h1 class="text-xl ">SMKN 65 JAKARTA</h1>
            </header>
            <div class="flex gap-4 mt-4 relative items-center">
                <form action="/s" method="GET" class="w-full">
                    <div class="flex bg-[#E6E6E6] rounded-full px-2 py-2 h-[70%] gap-2 w-full border border-[#C9C9C9]">
                        <button style="display: contents;" type="submit">
                            <ion-icon name="search-outline" class="w-6 h-6"></ion-icon>
                        </button>
                        <input type="text" value="" name="search" id="search" autocomplete="off"
                            class="rounded-full bg-[#E6E6E6] focus-within:outline-none px-1 w-full"
                            placeholder="Cari jajanan, & alat tulis">
                    </div>
                </form>
                <div class=" -mt-2 ">
                    <a href="/profile">
                        <img class="w-16 border-4 border-blue-500 rounded-full" src="/assets/icons/man-profile.webp"
                            alt="User - Profile Picture">
                    </a>
                </div>
            </div>
            <div x-show="openModal" x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 z-30 flex items-center justify-center bg-black bg-opacity-50 sm:items-center sm:justify-center">
                <!-- Modal -->
                <div x-show="openModal" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="openModal = false"
                    @keydown.escape="openModal = false"
                    class="w-fit px-6 py-4 overflow-hidden bg-white  sm:m-4 sm:max-w-xl" role="dialog" id="modal">
                    <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
                    <div class="text-center">
                        <h1 class="font-bold">Kamu Ingin Memamerkan Keseharian Kamu?</h1>
                        <h1 class="font-semibold my-4">Buatlah Postingan Disini</h1>

                        <a href="https://blog.muhamadzafarsyah.com"
                            class="relative cursor-pointer block w-fit mx-auto opacity-90 hover:opacity-100 transition-opacity p-[2px] bg-black rounded-[16px] bg-gradient-to-t from-[#8122b0] to-[#dc98fd] active:scale-95">
                            <span
                                class="w-full h-full flex items-center gap-2 px-8 py-3 bg-[#B931FC] text-white rounded-[14px] bg-gradient-to-t from-[#a62ce2] to-[#c045fc]">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path
                                        d="M8 13V9m-2 2h4m5-2v.001M18 12v.001m4-.334v5.243a3.09 3.09 0 0 1-5.854 1.382L16 18a3.618 3.618 0 0 0-3.236-2h-1.528c-1.37 0-2.623.774-3.236 2l-.146.292A3.09 3.09 0 0 1 2 16.91v-5.243A6.667 6.667 0 0 1 8.667 5h6.666A6.667 6.667 0 0 1 22 11.667Z">
                                    </path>
                                </svg>ZetBlog</span>
                        </a>

                    </div>
                </div>
            </div>
            </div>
        </nav>
        <main class="p-5 no-scrollbar">
            <section class="w-full overflow-hidden">
                <ul class="w-full flex justify-between overflow-x-scroll">

                    <li class="flex items-center flex-col shrink-0 w-1/4">
                        <div class="w-full text-center flex flex-col pt-2 mx-auto items-center ">
                            <a href="/category/seragam" @click="loading = true">
                                <img class="w-16 mx-auto" width="20" src="/assets/icons/icon-seragam.webp"
                                    alt="Koperasi-Category = seragam">
                                <h1 class="font-mulish text-[13px]  text-[#C9C9C9]">
                                    Seragam</h1>
                            </a>
                        </div>
                    </li>
                    <li class="flex items-center flex-col shrink-0 w-1/4">
                        <div class="w-full text-center flex flex-col pt-2 mx-auto items-center ">
                            <a href="/category/alat-tulis" @click="loading = true">
                                <img class="w-[72px] mx-auto" src="/assets/icons/icon-alat-tulis.webp"
                                    alt="Koperasi-Category = alat-tulis">
                                <h1 class="font-mulish text-[13px]  text-[#C9C9C9]">
                                    Alat Tulis</h1>
                            </a>
                        </div>
                    </li>
                    <li class="flex items-center flex-col shrink-0 w-1/4">
                        <div class="w-full text-center flex flex-col pt-2 mx-auto items-center ">
                            <a href="/category/jajanan" @click="loading = true">
                                <img class="w-16 mx-auto" src="/assets/icons/icon-jajanan.webp"
                                    alt="Koperasi-Category = jajanan">
                                <h1 class="font-mulish text-[13px] text-[#C9C9C9]">
                                    Jajanan</h1>
                            </a>
                        </div>
                    </li>
                    <li class="flex items-center flex-col shrink-0 w-1/4">
                        <div class="w-full text-center flex flex-col pt-2  items-center ">
                            <a href="/category/Lainnya" @click="loading = true">
                                <img class="w-[60px] " src="/assets/icons/icon-lainnya.webp"
                                    alt="Koperasi-Category = lainnya">
                                <h1 class="font-mulish text-[13px] text-[#C9C9C9]">
                                    Lainnya</h1>
                            </a>
                        </div>
                    </li>
                </ul>
            </section>
            <section class="mt-4 mb-20 no-scrollbar">
                <h1 class="font-munish font-bold text-lg">Cek yang baru di koperasi</h1>
                <div class="w-full">
                    <article class="rounded-xl shadow-md bg-white relative pb-4 mt-8">
                        <div class="rounded-xl">
                            <img class="rounded-xl max-h-80 object-cover overflow-hidden w-full"
                                src="/storage/news/01J6Q5Z91MZ2BDBFKFB7X53168.png" alt="News - BANTU MIMINN!! ">
                        </div>
                        <figcaption class="p-2 font-mulish ">
                            <h1 class="text-base font-bold">BANTU MIMINN!! </h1>
                            <p class="text-xs">Jika kalian menemukan error atau bug. misal &#039;wah tombol nya ga
                                berfungsi nih&#039; atau &#039;tampilan nya acak acakan nihh di hp aku&#039;, kalian
                                jangan ragu buat laporin ke developer yaaa.. dengan cara klik tombol [Lapor
                                Developer], ramah kok Developernyaa, okeeyy!!</p>
                        </figcaption>
                    </article>
                    <article class="rounded-xl shadow-md bg-white relative pb-4 mt-8">
                        <div class="rounded-xl">
                            <img class="rounded-xl max-h-80 object-cover overflow-hidden w-full"
                                src="/storage/news/01J6Q6696J87EY9DRW8ED273Y0.png" alt="News - INFO PENTINGG!!">
                        </div>
                        <figcaption class="p-2 font-mulish ">
                            <h1 class="text-base font-bold">INFO PENTINGG!!</h1>
                            <p class="text-xs">Oh iyaa mimin lupa kasih tau yaa guyss, kalo Aplikasi Koperasi ini
                                bisa di pakai buat media transaksi attribute sekolah lhoo.. jadi jika ada yang mau
                                beli attribute sekolah jangan lupa checkout di Koperasi App YAA!!</p>
                        </figcaption>
                    </article>
                    <article class="rounded-xl shadow-md bg-white relative pb-4 mt-8">
                        <div class="rounded-xl">
                            <img class="rounded-xl max-h-80 object-cover overflow-hidden w-full"
                                src="/storage/news/01J6Q57KK8FR81AW954XVTBQNB.png"
                                alt="News - KOPERASI ELIT HARGA MERAKYAT">
                        </div>
                        <figcaption class="p-2 font-mulish ">
                            <h1 class="text-base font-bold">KOPERASI ELIT HARGA MERAKYAT</h1>
                            <p class="text-xs">Meskipun koperasi kita udah banyak jajanan nya dan udah keren ada
                                aplikasinya tapi harganya tetap pelajar friendly lohh guyss!!</p>
                        </figcaption>
                    </article>
                    <article class="rounded-xl shadow-md bg-white relative pb-4 mt-8">
                        <div class="rounded-xl">
                            <img class="rounded-xl max-h-80 object-cover overflow-hidden w-full"
                                src="/storage/news/01J6Q4SX09NDAE1R4VW32GYCMY.JPG"
                                alt="News - YUK KENALAN SAMA SI DEVELOPER!!">
                        </div>
                        <figcaption class="p-2 font-mulish ">
                            <h1 class="text-base font-bold">YUK KENALAN SAMA SI DEVELOPER!!</h1>
                            <p class="text-xs">Aplikasi ini di build oleh 1 orang loh guyss numun dengan dukungan
                                teman teman aplikasi ini bisa berkembang hingga saat ini</p>
                        </figcaption>
                    </article>
                    <article class="rounded-xl shadow-md bg-white relative pb-4 mt-8">
                        <div class="rounded-xl">
                            <img class="rounded-xl max-h-80 object-cover overflow-hidden w-full"
                                src="/storage/news/01J6Q4FT6BQ9SN4CYWTJPA8CGW.jpg" alt="News - KoperaSIAPP !!!">
                        </div>
                        <figcaption class="p-2 font-mulish ">
                            <h1 class="text-base font-bold">KoperaSIAPP !!!</h1>
                            <p class="text-xs">Koprasi Sekarang Udah Aplikasi nyaa lohh guyss😱😱, share ke temen
                                temen kamu yaa biar semua pada nyobain aplikasi keren ini</p>
                        </figcaption>
                    </article>
                </div>
            </section>

        </main>
        <div id="loader" class="fixed inset-0 flex items-center justify-center bg-white z-50" x-show="loading">
            <div
                class="loader border-t-transparent border-solid animate-spin rounded-full border-blue-400 border-4 h-12 w-12">
            </div>
        </div>

        <div class="navigation" x-show="!loading" x-cloak>
            <ul>
                <li class="list active">
                    <a href="#">
                        <a href="#" class="delayed-link" data-href="/">
                            <span class="icon"><ion-icon name="home-outline" title="Home"></ion-icon></span>
                            <span class="text">Home</span>
                        </a>
                    </a>
                </li>


                <li class="list ">
                    <a href="#">
                        <a href="#" class="delayed-link" data-href="/transaction">
                            <span class="icon"><ion-icon name="receipt-outline"></ion-icon></span>
                            <span class="text">Transaction</span>
                        </a>
                    </a>
                </li>

                <li class="list ">
                    <a href="#">
                        <a href="#" class="delayed-link" data-href="/profile">
                            <span class="icon"><ion-icon name="person-outline" title="Profile"></ion-icon></span>
                            <span class="text">Profile</span>
                        </a>
                    </a>
                </li>

                <div class="indicator"></div>
            </ul>
        </div>




        <div x-data="{ open: true }" x-init="document.body.style.overflow = 'hidden';" x-show="open"
            x-transition:enter="transition ease-out duration-300 opacity-0" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-50" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed w-full inset-0 z-50 flex px-5 items-center justify-center overflow-auto bg-opacity-50">
            <div class="fixed w-full inset-0 z-30 flex px-5 items-center justify-center overflow-auto bg-opacity-50">
                <div class="fixed inset-0 bottom-0 top-0 z-50 backdrop-custom bg-opacity-50"></div>

                <div @click.away="open = false; document.body.style.overflow = 'auto';"
                    class="bg-white relative z-50 rounded-lg shadow-lg w-full max-w-md">
                    <button @click="open = false; document.body.style.overflow = 'auto';"
                        class="absolute -top-4 -right-2 m-4 text-black" style="width: 20px">&times;</button>
                    <div class="flex justify-center flex-col gap-4 items-center py-4">
                        <h1 class="text-2xl">Menemukan Error/Bug?</h1>
                        <h3>Laporkan Ke Developer</h3>
                        <a href="https://wa.me/+6288214367530?text=Bang developer, ada bug nih di web koprasi">
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2 group bg-gray-900 hover:bg-gray-950 transition-all duration-200 ease-in-out hover:ring-2 hover:ring-offset-2 hover:ring-gray-900">
                                <svg class="mr-2 text-white" stroke-linejoin="round" stroke-linecap="round"
                                    stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24"
                                    height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                    </path>
                                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                </svg>
                                <span class="text-white">Lapor Developer</span>
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <main class="hidden md:block">
        <section class=" fixed overflow-hidden h-screen">
            <!-- This is an example component -->
            <div class="h-screen w-screen bg-white flex justify-center items-center">
                <div class="flex items-center">
                    <div class="w-full">
                        <img class="w-96 mx-auto" src="/assets/icons/no-desktop.webp" alt="">
                    </div>
                    <div class="w-full">
                        <h1 class="text-7xl font-extrabold font-mulish gradient-main bg-clip-text text-transparent">
                            Oops!</h1>
                        <p class="text-lg gradient-main font-mulish bg-clip-text text-transparent">Maaf situs ini
                            tidak mendukung
                            desktop
                            gunakan perangkat mobile untuk mengakses</p>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="/assets/js/static.js"></script>
    <script src="/assets/js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/rellax@1.12.1/rellax.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Rellax('.rellax');
        });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="/sw.js"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(`Service worker registration failed: ${error}`);
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>

</x-layouts>
