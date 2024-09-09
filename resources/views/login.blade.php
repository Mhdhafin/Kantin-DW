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
        <div class="w-96 bg-white p-6 shadow-lg rounded-md">
            <h1 class="text-center block font-semibold text-4xl mb-2">Login<h1>
                    <hr>
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="mt-3">
                            <label for="email" class="block text-base">Email:</label>
                            <input type="email" id="email" name="email"
                                class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                                placeholder="Enter Your Username...">
                        </div>
                        <div class="mt-3">
                            <label for="password" class="block text-base">Password:</label>
                            <input type="password" id="password" name="password"
                                class="border w-full px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
                                placeholder="Enter Your Password...">
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="">
                                <input type="checkbox">
                                <label for="">Remeber Me?</label>
                            </div>
                            <div class="">
                                <span class="text-sm">Don't have account? <a href="/register"
                                        class="hover:text-blue-600 hover:underline">Register</a></span>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="submit"
                                class="w-full border-2 border-indigo-700 bg-indigo-700 transition duration-300 hover:bg-transparent">Submit</button>
                        </div>
                    </form>
        </div>
    </div>


</body>

</html>
