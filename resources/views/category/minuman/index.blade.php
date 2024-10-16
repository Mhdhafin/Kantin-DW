@extends('layouts.category')


@section('body')
    <x-navbar>
        <x-slot name="title">{{ $title }}</x-slot>
    </x-navbar>
    <section class="pt-72 px-4 ">
        <div class="grid grid-cols-2 gap-4 grid-rows-6">
            @foreach ($products as $item)
                <div class="shadow-lg bg-slate-200 rounded-md">
                    <img src="/storage/{{ $item->image }}" class="w-96 h-36 rounded-t-xl" alt="">
                    <div class="p-4 ">
                        <h2 class="text-sm font-semibold text-gray-800">{{ $item->name }}</h2>
                        <span class="text-2xl font-medium">{{ $item->price }}</span>

                    </div>
                    <div class="border-t-2 p-3 border-gray-500 flex justify-between items-center">
                        <span class="text-xs flex items-center">4.5
                            <img src="/assets/img/star.png" width="18px" alt="">
                        </span>
                    </div>
                </div>
            @endforeach


        </div>
    </section>
@endsection