<x-app-layout>
    <div class="bg-black text-white px-10 md:px-20 py-12 md:py-8 max-w-7xl mx-auto my-10 lg:rounded-full md:rounded-none space-y-10">

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center leading-tight">
            Video einreichen
        </h1>

        <div class="flex flex-col md:flex-row items-center justify-between gap-8 sm:gap-10 md:gap-12 px-4 sm:px-8 md:px-10">
            <div class="flex-1 space-y-6">
                <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">
                    Mitmachen lohnt sich!
                </h2>

                <p class="text-sm sm:text-base leading-relaxed text-justify pb-5">
                    Ein Wettbewerb wäre natürlich nichts ohne die passenden Preise. Und die haben wir definitiv für euch. Eines unserer Aushängeschilder ist dabei "Ihr Produkt" von "Ihr Unternehmen". Weiters gibt es auch "Ihr Produkt" von "Ihr Unternehmen" zu gewinnen.
                </p>

                <a href="{{ route('teilnahme') }}"
                   class="text-brandpurple underline hover:text-purple-400 transition">
                    → Mehr zu den Gewinnen
                </a>
            </div>

            <div class="flex-1">
                <img src="{{ asset('images/main/gewinne.jpg') }}"
                     alt="kuh"
                     class="w-full max-w-sm sm:max-w-md md:max-w-xl mx-auto rounded-2xl object-cover shadow-xl">
            </div>
        </div>

        <div class="hidden lg:flex h-1.5 bg-brandpurple rounded-full w-1/3 mx-auto mt-8"></div>
    </div>
</x-app-layout>
