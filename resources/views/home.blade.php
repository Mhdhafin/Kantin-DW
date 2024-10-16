<x-layouts>
    <x-slot name="title">{{ $title }}</x-slot>

    @include('partials.navbar')

    <section class="pt-27 pb-32 ">

        <div class="block w-full px-4">
            <h2 class="text-base font-bold">Paling Populer</h2>
            <div class="mt-8 rounded-xl bg-slate-200 shadow-lg ">
                <img src="{{ asset('assets/img/bakso.jpg') }}" class="w-full object-cover rounded-t-xl" width="200px"
                    alt="">
                <div class="p-6 mb-3">
                    <h2 class="text-base font-semibold text-gray-800">Bakso Malang</h2>
                    <span class="text-2xl font-medium">RP.20.000</span>

                </div>

            </div>
        </div>
    </section>



</x-layouts>
