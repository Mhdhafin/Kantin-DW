<div class="w-full flex items-center justify-end">
    <picture>
        <source srcset='/assets/icons/logo_sekolah.webp' type='image/webp'>
        <img width="75" height="75" src='/assets/icons/logo_sekolah.webp' alt='Logo SMK Negeri 65'>
    </picture>
</div>
<header class="font-medium text-[32px] font-mulish">
    <h1>Kantin</h1>
    <h1>Dharma Wanita</h1>
</header>
<div>
    <span class="text-[16px]">Berlokasi di dalam RS.Persahabatan Rawamangun</span>
</div>
<div class="w-full py-14 mx-auto">
    <picture>
        <source srcset='/assets/icons/login_ilustration.webp' type='image/png'>
        <img class="mx-auto" width="332" height="244" src='/assets/icons/login_ilustration.webp'
            alt='Ilustrasi halaman login'>
    </picture>
</div>

<div x-data="{ modal: false }">
    <button class="btn text-auto w-full btn-primary mb-3 scroll-lock" @click="modal = !modal"
        :aria-expanded="modal ? 'true' : 'false'">Login</button>
    <div class="modal-wrapper" :class="{ 'active': modal }">
        <div class="backdrop backdrop-shaded scroll-unlock" x-show.transition.opacity.duration.600ms="modal"
            @click="modal = false"></div>
        <div class="modal-panel bg-white p-6 shadow-lg rounded-md b-thin bg-color-background"
            :class="{ 'active': modal }">
            <div class="w-96">
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

                            <div class="">
                                <span class="text-base mt-2">Tidak memiliki akun? <a href="/register"
                                        class="hover:text-blue-600 hover:underline">Register</a></span>
                            </div>

                            <div class="mt-5">
                                <button type="submit"
                                    class="w-full border-2 hover:text-black text-white text-base border-indigo-700 bg-indigo-700 transition duration-300 hover:bg-transparent">Submit</button>
                            </div>
                        </form>
            </div>
        </div>
    </div>
</div>
