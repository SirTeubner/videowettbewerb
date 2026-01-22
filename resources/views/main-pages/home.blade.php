<x-app-layout>

    <!-- Hauptbereich -->
    <div class="bg-black text-white px-20 py-5 max-w-7xl mx-auto my-10 rounded-full space-y-16">

        <!-- Überschrift -->
        <h1 class="text-5xl font-bold text-center leading-tight">
            Der erste Pinzgauer Videowettbewerb
        </h1>

        <!-- Text und Bild -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-12">

            <!-- Textblock -->
            <div class="flex-1 space-y-6">
                <h2 class="text-2xl font-semibold">
                    Was macht den Pinzgau für dich besonders?
                </h2>

                <p class="text-base leading-relaxed">
                    Unter diesem Motto starten wir (das sind Arian, David, Noah und Samuel) den ersten Pinzgauer Video- und Fotowettbewerb für Jugendliche. Besser gesagt für Schüler und Schülerinnen der dritten und vierten Klasse Unterstufe. Der Videowettbewerb wird hierbei im Gruppenformat ausgetragen, während es beim Fotowettbewerb um Einzelleistungen geht. Unser Ziel ist es, dem Pinzgau ein neues Gesicht zu geben. Dabei geht es auch um euch, denn egal, was den Pinzgau für euch besonders macht, wir wollen es sehen. Ob Sport, Brauchtum, die Menschen oder etwas ganz anderes, ihr entscheidet. Also, startet gleich durch, wir freuen uns auf eure Videos und Fotos.
                </p>

                <a href="{{ route('teilnahme') }}"
                   class="text-brandpurple underline hover:text-purple-400 transition">
                    → Mehr zu den Teilnahmebedingungen
                </a>
            </div>

            <!-- Bildblock -->
            <div class="flex-1">
                <img src="{{ asset('images/kuh.png') }}"
                     alt="kuh"
                     class="w-full max-w-xl mx-auto rounded-2xl object-cover shadow-xl">
            </div>

        </div>

        <!-- Lila Balken -->
        <div class="h-2 bg-[#A594F9] rounded-full w-1/2 mx-auto mt-12"></div>

    </div>

</x-app-layout>
