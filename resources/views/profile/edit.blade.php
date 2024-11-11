@extends('layouts.main')

@section('content')
    <section class="p-5">

        <x-header name="title">{{ $title }}</x-header>


        <div class="p-6 pt-12">
            <form action="/profile/edit" method="POST">
                @method('PUT')
                @csrf
                <div class="px-3 mb-6">
                    <label for="profile_picture" class="block mb-2 text-base font-semibold text-gray-900">
                        <span>Profile_picture</span>
                        <img src="{{ asset('storage/' . $users->profile_picture) }}" class="z-10" width="200px"
                            alt="">
                    </label>

                    <input type="file" id="profile_picture" value="{{ $users->profile_picture }}">
                </div>
                <div class="px-3 mb-6">
                    <label for="name" class="block mb-2 text-base font-semibold text-gray-900">
                        Name
                    </label>
                    <input type="text" id="name" value="{{ $users->name }}"
                        class="border focus:outline-none focus:ring-2 focus:ring-yellow-600 w-full  px-3 py-2 rounded-lg">
                </div>
                <div class="px-3 mb-6">
                    <label for="email" class="block mb-2 text-base font-semibold text-gray-900">
                        Email
                    </label>
                    <input type="text" id="email" value="{{ $users->email }}"
                        class="border focus:outline-none focus:ring-2 focus:ring-yellow-600 w-full  px-3 py-2 rounded-lg">
                </div>

                <div class="px-3 mb-6">
                    <button type="submit"
                        class="w-full border-2 hover:text-black text-white text-base border-yellow-700 bg-yellow-700 transition duration-300 hover:bg-transparent">Submit</button>
                </div>
            </form>
        </div>



    </section>
@endsection
