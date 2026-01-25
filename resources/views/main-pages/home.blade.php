<x-app-layout>

    <div class="bg-black text-white px-10 md:px-20 py-12 md:py-8 max-w-7xl mx-auto my-10 lg:rounded-full md:rounded-none space-y-10">

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center leading-tight">
            Der erste Pinzgauer Videowettbewerb
        </h1>

        <div class="flex flex-col md:flex-row items-center justify-between gap-8 sm:gap-10 md:gap-12 px-4 sm:px-8 md:px-10">

            <div class="flex-1 space-y-6">
                <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">
                    Was macht den Pinzgau für dich besonders?
                </h2>

                <p class="text-sm sm:text-base leading-relaxed text-justify">
                    Unter diesem Motto starten wir (das sind Arian, David, Noah und Samuel) den ersten Pinzgauer Video- und Fotowettbewerb für Jugendliche. Besser gesagt für Schüler und Schülerinnen der dritten und vierten Klasse Unterstufe. Der Videowettbewerb wird hierbei im Gruppenformat ausgetragen, während es beim Fotowettbewerb um Einzelleistungen geht. Unser Ziel ist es, dem Pinzgau ein neues Gesicht zu geben. Dabei geht es auch um euch, denn egal, was den Pinzgau für euch besonders macht, wir wollen es sehen. Ob Sport, Brauchtum, die Menschen oder etwas ganz anderes, ihr entscheidet. Also, startet gleich durch, wir freuen uns auf eure Videos und Fotos.
                </p>

                <a href="{{ route('teilnahme') }}"
                   class="text-brandpurple underline hover:text-purple-400 transition">
                    → Mehr zu den Teilnahmebedingungen
                </a>
            </div>

            <div class="flex-1">
                <img src="{{ asset('images/kuh.png') }}"
                     alt="kuh"
                     class="w-full max-w-sm sm:max-w-md md:max-w-xl mx-auto rounded-2xl object-cover shadow-xl">
            </div>

        </div>

        <div class="hidden lg:flex h-1.5 bg-brandpurple rounded-full w-1/3 mx-auto mt-8"></div>
    </div>
</x-app-layout>
