{{-- @dd(auth()->user()) --}}

<nav class="absolute w-full rounded-b-2xl text-black  bg-white  z-10  mx-auto">

    <div class="flex justify-between items-center">
        <a href="/" class="m-2 w-12 h-12 bg-slate-100 rounded-full shadow-md">
            <div class="px-4 text-green-600 hover:text-green-900 font-semibold py-3">
                <i class="far fa-arrow-left fa-xl"></i>
            </div>
        </a>
        <a href="/shopping-cart" class="m-3 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="30px"
                viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
            </svg>
        </a>

    </div>





    <div class="px-4 mt-2 mb-2 ">
        <h4 class="text-black font-mulish text-3xl font-medium leading-tight truncate">{{ $title }}
        </h4>
    </div>

    <div class="flex items-center justify-between mt-3 px-3 z-10">
        <div class="relative w-full">
            <input type="text" class="bg-purple-white shadow rounded-xl border-0 p-3 w-full"
                placeholder="Mau makan apa hari ini?">
            <div class="absolute top-0 right-0 p-4 pr-3 text-purple-lighter">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="w-full rounded-b-2xl p-3 space-y-4 z-0">
        <div class="flex rounded-b-full items-center justify-between text-gray-500 cursor-pointer space-x-3">
            <a href="/category/makanan"
                class="{{ Request::is('category/makanan') ? 'flex flex-col items-center justify-center border-t-4 w-20  h-20 border-yellow-400 z-10' : 'flex flex-col items-center justify-center border-t-4 w-20  h-20  border-hidden' }} bg-green-200 rounded-2xl text-green-600  shadow hover:shadow-md cursor-pointer mb-2 p-1 transition ease-in duration-300">
                <i class="far fa-utensils"></i>
                <p class="text-sm mt-1">Makanan</p>
            </a>
            <a href="/category/minuman"
                class="{{ Request::is('category/minuman') ? 'flex flex-col items-center justify-center border-t-4 w-20  h-20 border-yellow-400 z-10' : 'flex flex-col items-center justify-center border-t-4 w-20  h-20  border-hidden' }} bg-yellow-200 rounded-2xl text-yellow-600  shadow hover:shadow-md cursor-pointer mb-2 p-1 transition ease-in duration-300">
                <i class="far fa-coffee"></i>
                <p class="text-sm mt-1">Minuman</p>
            </a>

            <a href="/category/snack"
                class="{{ Request::is('category/snack') ? 'flex flex-col items-center justify-center border-t-4 w-20  h-20 border-yellow-400 z-10' : 'flex flex-col items-center justify-center border-t-4 w-20  h-20  border-hidden' }} bg-blue-200 rounded-2xl text-blue-600  shadow hover:shadow-md cursor-pointer mb-2 p-1 transition ease-in duration-300">
                <i class="far fa-hamburger"></i>
                <p class="text-sm mt-1">Snack</p>
            </a>
            <a href="/category/lainnya"
                class="{{ Request::is('category/lainnya') ? 'flex flex-col items-center justify-center border-t-4 w-20  h-20 border-yellow-400 z-10' : 'flex flex-col items-center justify-center border-t-4 w-20  h-20  border-hidden' }} bg-pink-200 rounded-2xl text-pink-600  shadow hover:shadow-md cursor-pointer mb-2 p-1 transition ease-in duration-300">
                <i class="far fa-ellipsis-h"></i>
                <p class="text-sm mt-1">Lainnya</p>
            </a>
        </div>
    </div>


</nav>



<script>
    window.onscroll = function() {
        const header = document.querySelector("nav");
        const fixedNav = header.offsetTop;

        if (window.pageYOffset > fixedNav) {
            header.classList.add("navbar-fixed");
            header.classList.remove("absolute");
        } else {
            header.classList.remove("navbar-fixed");
            header.classList.add("absolute");
        }
    };
</script>
