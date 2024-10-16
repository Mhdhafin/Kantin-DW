<header class="font-medium pt-8">

    @if (Session::has('status'))
        <div class="bg-green-200 px-6 py-4  my-4 rounded-md text-lg flex items-center mx-auto max-w-lg">
            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                <path fill="currentColor"
                    d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                </path>
            </svg>
            <span class="text-green-800">{{ Session::get('success') }}</span>
        </div>
    @endif



    <span class="text-[32px]  font-mulish">
        <h1>Kantin</h1>
        <h1>Dharma Wanita</h1>
    </span>
</header>
<div>
    <span class="text-[16px]">Berlokasi di dalam RS.Persahabatan Rawamangun</span>
</div>
<div class="w-full py-14 mx-auto">
    <picture>
        <source srcset='/assets/img/ospk_logo.png' type='image/png'>
        <img class="mx-auto" width="332" height="244" src='/assets/icons/login_ilustration.webp'
            alt='Ilustrasi halaman login'>
    </picture>
</div>



<div x-data="{ modal: false, showRegisterModal: false }">
    <!-- Login Button -->
    <button class="btn text-auto w-full btn-primary mb-3 scroll-lock" @click="modal = !modal"
        :aria-expanded="modal ? 'true' : 'false'">Login</button>

    <!-- Login Modal -->
    <div class="modal-wrapper" :class="{ 'active': modal }">
        <div class="backdrop backdrop-shaded scroll-unlock" x-show.transition.opacity.duration.600ms="modal"
            @click="modal = false"></div>
        <div class="modal-panel bg-white p-6 shadow-lg rounded-md" :class="{ 'active': modal }">
            <div class="w-96">
                <h1 class="text-center text-yellow-600 font-bold text-4xl mb-5">Login</h1>


                <form action="/login/auth" method="POST">
                    @csrf

                    <div class="mb-8 mt-3">

                        <div>

                            <label for="email" class="text-gray-800 text-sm font-medium  mb-2 block">Email: </label>
                            <div class="relative flex items-center">
                                <input name="email" id="email" type="email" required
                                    class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-yellow-600"
                                    placeholder="Enter Email..." />
                                <a class="absolute border-hidden right-4 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                        class="w-[18px] h-[18px] " viewBox="0 0 24 24">
                                        <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                                        <path
                                            d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                            data-original="#000000"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        {{-- var x = document.querySelector('input[name=password]'); if (x.type === 'password') { x.type = 'text'; } else { x.type = 'password'; } --}}
                        <div>
                            <label for="password" class="text-gray-800 font-medium text-sm mb-2 block">Password</label>
                            <div class="relative flex items-center">
                                <input name="password" id="password" type="password" required
                                    class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-yellow-600"
                                    placeholder="Enter password" />
                                <a class="absolute border-hidden right-4 cursor-pointer" onclick="onclick()">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                        class="w-[18px] h-[18px]" viewBox="0 0 128 128">
                                        <path
                                            d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                            data-original="#000000"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="h-4 w-4 shrink-0 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded" />
                                <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                                    Remember me
                                </label>
                            </div>

                            <div class="text-sm">
                                <a href="jajvascript:void(0);" class="text-yellow-600 hover:underline font-semibold">
                                    Forgot your password?
                                </a>
                            </div>
                        </div>

                        <div class="!mt-8">
                            <button type="submit"
                                class="w-full border-2 hover:text-black text-white text-base border-yellow-700 bg-yellow-700 transition duration-400 hover:bg-transparent">Submit</button>
                        </div>

                        <p class="text-sm !mt-8 text-center text-gray-800">Don't have an account <a
                                href="javascript:void(0);" @click.prevent="showRegisterModal = true"
                                class="text-yellow-600 font-semibold hover:underline ml-1 whitespace-nowrap">Register
                                here</a></p>
                    </div>
                </form>



                {{-- <div class="mt-3">
                        <label for="email" class="block text-base">Email:</label>
                        <input type="email" id="email" name="email"
                            class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                            placeholder="Enter Your email...">
                    </div>
                    <div class="mt-3">
                        <label for="password" class="block text-base">Password:</label>
                        <input type="password" id="password" name="password"
                            class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                            placeholder="Enter Your Password...">
                    </div>
                    <div class="mt-3">
                        <span class="text-base">Tidak memiliki akun? <a href="#"
                                @click.prevent="showRegisterModal = true"
                                class="hover:text-blue-600 hover:underline">Register</a></span>
                    </div>
                    <div class="mt-5">
                        <button type="submit"
                            class="w-full border-2 hover:text-black text-white text-base border-indigo-700 bg-indigo-700 transition duration-300 hover:bg-transparent">Submit</button>
                    </div> --}}

            </div>
        </div>
    </div>

    <!-- Registration Modal -->
    <div class="modal-wrapper" :class="{ 'active': showRegisterModal }">
        <div class="backdrop backdrop-shaded scroll-unlock" x-show.transition.opacity.duration.600ms="showRegisterModal"
            @click="showRegisterModal = false"></div>
        <div class="modal-panel bg-white p-6 shadow-lg rounded-md" :class="{ 'active': showRegisterModal }">
            <div class="w-96">
                <h1 class="text-center block font-semibold text-4xl mb-5">Register<h1>

                        <hr>
                        <form action="/register/auth" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-8 mt-3">

                                <div>

                                    <label for="name" class="text-gray-800 text-sm font-medium  mb-2 block">Name:
                                    </label>
                                    <div class="relative flex items-center">
                                        <input name="name" id="name" type="name" required
                                            class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-yellow-600"
                                            placeholder="Enter name..." />
                                        @error('name')
                                            <div class="absolute text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                        <a class="absolute border-hidden right-4 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                                class="w-[18px] h-[18px] " viewBox="0 0 24 24">
                                                <circle cx="10" cy="7" r="6" data-original="#000000">
                                                </circle>
                                                <path
                                                    d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                                    data-original="#000000"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div>

                                    <label for="email" class="text-gray-800 text-sm font-medium  mb-2 block">Email:
                                    </label>
                                    <div class="relative flex items-center">
                                        <input name="email" id="email" type="email" required
                                            class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-yellow-600"
                                            placeholder="Enter Email..." />
                                        @error('email')
                                            <div class="absolute text-red-500 text-xs">{{ $message }}</div>
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
                                <div>
                                    <label for="password"
                                        class="text-gray-800 font-medium text-sm mb-2 block">Password</label>
                                    <div class="relative flex items-center">
                                        <input name="password" id="password" type="password" required
                                            class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-yellow-600"
                                            placeholder="Enter password" />
                                        <a class="absolute  right-4 cursor-pointer" onclick="onclick()">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                                class="w-[18px] h-[18px]" viewBox="0 0 128 128">
                                                <path
                                                    d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                                    data-original="#000000"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <div class="flex items-center">
                                        <input id="remember-me" name="remember-me" type="checkbox"
                                            class="h-4 w-4 shrink-0 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded" />
                                        <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                                            Remember me
                                        </label>
                                    </div>

                                    <div class="text-sm">
                                        <a href="jajvascript:void(0);"
                                            class="text-yellow-600 hover:underline font-semibold">
                                            Forgot your password?
                                        </a>
                                    </div>
                                </div>

                                <div class="!mt-8">
                                    <button type="submit"
                                        class="w-full border-2 hover:text-black text-white text-base border-yellow-700 bg-yellow-700 transition duration-400 hover:bg-transparent">Submit</button>
                                </div>

                                <p class="text-sm !mt-8 text-center text-gray-800">Don't have an account <a
                                        href="javascript:void(0);" @click.prevent="showRegisterModal = true"
                                        class="text-yellow-600 font-semibold hover:underline ml-1 whitespace-nowrap">Register
                                        here</a></p>
                            </div>
                            {{-- <div class="mt-3">
                                <label for="name" class="block text-base">Name:</label>
                                <input type="text" id="name" name="name"
                                    class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                                    placeholder="Enter Your Name..." />
                            </div>
                            @error('name')
                                <div class="absolute text-xs text-red-500">{{ $message }}</div>
                            @enderror
                            <div class="mt-3">
                                <label for="email" class="block text-base">Email:</label>
                                <input type="email" id="email" name="email"
                                    class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                                    placeholder="Enter Your Email..." />
                            </div>
                            @error('email')
                                <div class="absolute text-xs text-red-500">{{ $message }}</div>
                            @enderror
                            <div class="mt-3">
                                <label for="password" class="block text-base">Password:</label>
                                <input type="password" id="password" name="password"
                                    class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                                    placeholder="Enter Your Password..." />
                            </div>
                            @error('password')
                                <div class="absolute text-xs text-red-500">{{ $message }}</div>
                            @enderror
                            <div class="mt-2">
                                <label class="mb-1 text-base tracking-wide" for="profile_picture">Profile
                                    Picture</label>
                                <img class="mb-2 img-preview object-cover">
                                <input onchange="previewImage()"
                                    class=" block w-full rounded-2xl  text-xs text-gray-900 cursor-pointer border-2 p-1
                                -gray-400 dark:text-gray-400 focus:outline-none  dark:placeholder-gray-400"
                                    id="profile_picture" name="profile_picture" type="file">
                                <p class="text-xs text-gray-600" id="file_input_help">
                                    PNG, JPG or
                                    JPEG (MAX.
                                    1mb).</p>
                                @error('profile_picture')
                                    <div class="absolute text-xs text-red-500">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="mt-3">
                                <span>Already account? <a href="#"
                                        @click.prevent="showRegisterModal = false; modal = true"
                                        class="text-blue-600 hover:underline"> Login
                                    </a></span>
                            </div>


                            <div class="mt-5">
                                <button type="submit"
                                    class="w-full border-2 hover:text-black text-white border-indigo-700 bg-indigo-700 transition duration-300 hover:bg-transparent">Submit</button>
                             </div>  --}}
                        </form>
            </div>
        </div>
    </div>
</div>

<script>
    onclick = () => {
        var x = document.querySelector('input[name=password]');
        if (x.type === 'password') {
            x.type = 'text';
        } else {
            x.type = 'password';
        }
    }

    // Alert Box

    const alert = document.querySelector("#alert-box");

    alert.addEventListener("DOMContentLoaded", (event) => {});
    setTimeout(() => {
        if (alert) {
            alert.style.display = "none";
            alert.style.transition = "all 0.2s ease";
        }
    }, 50000);
</script>
