<header class="flex justify-between mr-2 items-center">

    <a href="{{ Request::is('profileEdit') ? '/' : '/profile' }}"
        class="m-2 w-12 h-12 bg-slate-100 rounded-full shadow-md">
        <div class="px-4 text-green-600 hover:text-green-900 font-semibold py-3">
            <i class="far fa-arrow-left fa-xl"></i>
        </div>
    </a>

    <div class="">
        <h2 class="text-xl font-semibold" name="title">{{ $slot }}</h2>
    </div>

    <a href="" class="opacity-0 cursor-default m-2 w-12 h-12 bg-slate-100 rounded-full shadow-md">
        <div class="px-4 text-green-600 hover:text-green-900 font-semibold py-3">
            <i class="far fa-pen fa-xl"></i>
        </div>
    </a>
</header>
