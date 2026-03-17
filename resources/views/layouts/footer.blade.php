<footer class="text-white text-sm">
    <!-- Lila Trennlinie am linken Rand -->
    <div class="block bg-transparent">
        <hr class="border-brandpurple md:w-80 border-2">
    </div>

    <div class="mx-auto px-6 py-10 bg-black">

        <!-- Instagram -->
        <div class="flex justify-center mb-2">
            <a href="https://instagram.com/videowettbewerb_pinzgau" target="_blank" class="text-white hover:text-brandpurple transition">
                <svg class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                    <!-- Instagram SVG Pfad -->
                    <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm5.25-.75a.75.75 0 110 1.5.75.75 0 010-1.5z"/>
                </svg>
            </a>
        </div>

        <!-- Trennlinie -->
        <div class="flex h-0.5 bg-white rounded-full w-1/6 mx-auto mb-4"></div>

        <!-- Sponsorenlogos -->
        <img src="{{ asset('images/footer/partner.png') }}" class="w-auto md:max-w-xl mx-auto mb-4 rounded-lg"/>

        <!-- Trennlinie -->
        <div class="flex h-0.5 bg-white rounded-full w-1/3 mx-auto mb-4"></div>

        <!-- Footer-Details -->
        <div class="flex flex-col sm:flex-row justify-center items-center gap-8 text-brandpurple text-base">
            <div>by al / dm / nt / sh</div>
            <div><a href="/impressum" class="text-brandpurple hover:font-bold transition">Impressum</a></div>
            <div>all rights reserved</div>
        </div>
    </div>
</footer>
