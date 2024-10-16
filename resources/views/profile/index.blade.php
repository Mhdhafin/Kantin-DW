<x-layouts>
    <x-slot name="title">{{ $title }}</x-slot>

    <section class="pt-5">



        <header class="flex justify-between mr-2 items-center">



            <a href="" class="opacity-0 cursor-default m-2 w-12 h-12 bg-slate-100 rounded-full shadow-md">
                <div class="px-4 text-green-600 hover:text-green-900 font-semibold py-3">
                    <i class="far fa-pen fa-xl"></i>
                </div>
            </a>

            <div class="">
                <h2 class="text-xl font-semibold" name="title">{{ $title }}</h2>
            </div>

            {{-- <a href="/profile/edit/{{ auth()->user()->id }}" class="m-2 w-12 h-12 bg-slate-100 rounded-full shadow-md">
                <div class="px-4 text-green-600 hover:text-green-900 font-semibold py-3">
                    <i class="far fa-pen fa-xl"></i>
                </div>
            </a> --}}



            <div x-data="{ modal: false }">
                <!-- Login Button -->
                <button @click="modal = !modal" :aria-expanded="modal ? 'true' : 'false'"
                    class="m-2 w-12 h-12 bg-slate-100 rounded-full shadow-md">
                    <div class="px-4 text-green-600 hover:text-green-900 font-semibold py-3">
                        <i class="far fa-pen fa-xl"></i>
                    </div>
                </button>

                <!-- Registration Modal -->
                <div class="modal-wrapper" :class="{ 'active': modal }">
                    <div class="backdrop backdrop-shaded scroll-unlock" x-show.transition.opacity.duration.600ms="modal"
                        @click="modal = false">
                    </div>
                    <div class="modal-panel bg-white p-6 shadow-lg rounded-md" :class="{ 'active': modal }">
                        <div class="w-96">
                            <h1 class="text-center block font-semibold text-3xl mb-5">Edit Profile<h1>


                                    <form action="/profile/edit/{{ auth()->user()->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-8 mt-3">


                                            <div>
                                                <label class="block mt-4 text-sm">
                                                    <span class="text-gray-800 text-sm font-medium  mb-2 block">Profile
                                                        Picture</span>
                                                    <div class="flex items-center justify-center w-full">
                                                        <label for="dropzone-file"
                                                            class="flex flex-col relative py-4 items-center justify-center w-28 h-28 rounded-full border-2 border-gray-300 border-dashed cursor-pointer bg-gray-50  dark:bg-gray-200 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                                            <img id="img-preview"
                                                                class="w-28 h-28 rounded-full object-cover hidden">

                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="size-12 absolute text-gray-500" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                                            </svg>

                                                            <input id="dropzone-file" name="icon"
                                                                onchange="previewImage()" id="image imgInp"
                                                                value="{{ old('icon') }}" type="file"
                                                                class="image invisible w-28 h-28" />
                                                            @error('icon')
                                                                <p class="text-red-500 text-xs mt-1">
                                                                    {{ $massage }}
                                                                </p>
                                                            @enderror
                                                        </label>
                                                    </div>

                                                </label>
                                            </div>

                                            <div>

                                                <label for="name"
                                                    class="text-gray-800 text-sm font-medium  mb-2 block">Name:
                                                </label>
                                                <div class="relative flex items-center">
                                                    <input name="name" id="name" value="{{ $users->name }}"
                                                        type="name" required
                                                        class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-yellow-600" />
                                                    @error('name')
                                                        <div class="absolute text-red-500 text-xs">{{ $message }}</div>
                                                    @enderror
                                                    <a class="absolute border-hidden right-4 ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb"
                                                            stroke="#bbb" class="w-[18px] h-[18px] "
                                                            viewBox="0 0 24 24">
                                                            <circle cx="10" cy="7" r=" 6"
                                                                data-original="#000000">
                                                            </circle>
                                                            <path
                                                                d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                                                data-original="#000000"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>

                                                <label for="email"
                                                    class="text-gray-800 text-sm font-medium  mb-2 block">Email:
                                                </label>
                                                <div class="relative flex items-center">
                                                    <input name="email" id="email" type="email"
                                                        value="{{ $users->email }}"
                                                        class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-yellow-600"
                                                        required />
                                                    @error('email')
                                                        <div class="absolute text-red-500 text-xs">{{ $message }}
                                                        </div>
                                                    @enderror
                                                    <a class="absolute border-hidden right-4 ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbb"
                                                            class="h-[18px] w-[18px]">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                                        </svg>


                                                    </a>

                                                </div>
                                            </div>  

                                            <div class="!mt-8">
                                                <button type="submit"
                                                    class="w-full border-2 hover:text-black text-white text-base border-yellow-700 bg-yellow-700 transition duration-400 hover:bg-transparent">Sumbit</button>
                                            </div>
                                        </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="flex flex-wrap">
            <div class="w-full px-4">
                <div class="flex p-6 justify-center">
                    <img src="{{ auth()->user()->profile_picture }}"
                        class="rounded-full border-2 border-gray-900 w-36 h-36 object-cover" alt="">

                </div>
                <div class="text-center">
                    <h2 class="text-2xl font-medium ">{{ auth()->user()->name }}</h2>
                    <h2 class="text-base text-slate-500 ">{{ auth()->user()->email }}</h2>
                </div>

                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>

            </div>
            <div class="w-full self-baseline px-4">
                <button class="bg-yellow-400 w-full hover:bg-transparent border-yellow-400 border-2"><a
                        href="/logout">LOGOUT</a></button>
            </div>
        </div>
    </section>
    <script>
        function previewImage() {
            const image = document.querySelector(".image");
            const file = document.querySelector(".file");
            const imgPreview = document.querySelector("#img-preview");

            // Menampilkan preview hanya jika file telah dipilih
            if (image.files && image.files[0]) {
                imgPreview.style.display = "block";
                file.style.display = "none";

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                };
            }
        }
    </script>
</x-layouts>
