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



    <div class="flex relative justify-center bg-indigo-500 items-center h-screen">
        <div class="w-1/3 bg-white p-6 shadow-lg rounded-md">
            <h1 class="text-center block font-semibold text-4xl mb-5">Register<h1>
                    @if (Session::has('success'))
                    @endif
                    <hr>
                    <form action="{{ route('registerPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label for="name" class="block text-base">Name:</label>
                            <input type="text" id="name" name="name"
                                class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                                placeholder="Enter Your Name..." required />
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
                            <span>Already account? <a href="{{ route('login') }} "
                                    class="text-blue-600 hover:underline"> Login
                                </a></span>
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
