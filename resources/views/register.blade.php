<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="flex justify-center bg-indigo-500 items-center h-screen">
        <div class="w-1/3 bg-white p-6 shadow-lg rounded-md">
            <h1 class="text-center block font-semibold text-4xl mb-2">Register<h1>
                    @if (Session::has('success'))
                        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
                            <div class="p-6 border-l-4 border-green-500 -6 rounded-r-xl bg-green-50">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm text-green-600">
                                            <p>{{ Session::get('success') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <hr>
                    <form action="{{ route('registerPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label for="username" class="block text-base">Username:</label>
                            <input type="text" id="username" name="username"
                                class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                                placeholder="Enter Your Username..." required />
                        </div>
                        @error('username')
                            <div class="absolute text-xs text-red-500">{{ $message }}</div>
                        @enderror
                        <div class="mt-3">
                            <label for="email" class="block text-base">Email:</label>
                            <input type="email" id="email" name="email"
                                class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                                placeholder="Enter Your Email..." required />
                        </div>
                        @error('email')
                            <div class="absolute text-xs text-red-500">{{ $message }}</div>
                        @enderror
                        <div class="mt-3">
                            <label for="password" class="block text-base">Password:</label>
                            <input type="password" id="password" name="password"
                                class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                                placeholder="Enter Your Password..." required />
                        </div>
                        @error('password')
                            <div class="absolute text-xs text-red-500">{{ $message }}</div>
                        @enderror
                        <div class="mt-2">
                            <label class="mb-1 text-base tracking-wide" for="profile_picture">Profile
                                Picture</label>
                            <img class="mb-2 img-preview object-cover" width="80px">
                            <input onchange="previewImage()"
                                class=" block w-full rounded-2xl  text-xs text-gray-900 cursor-pointer border-2 p-1 border-gray-400 dark:text-gray-400 focus:outline-none  dark:placeholder-gray-400"
                                id="profile_picture" name="profile_picture" type="file">
                            <p class="text-xs text-gray-600" id="file_input_help">
                                PNG, JPG or
                                JPEG (MAX.
                                1mb).</p>
                            @error('profile_picture')
                                <div class="absolute text-xs text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <button type="submit"
                                class="w-full border-2 border-indigo-700 bg-indigo-700 transition duration-300 hover:bg-transparent">Submit</button>
                        </div>
                    </form>
        </div>
    </div>

    <script src="./assets/js/script.js"></script>
</body>

</html>
