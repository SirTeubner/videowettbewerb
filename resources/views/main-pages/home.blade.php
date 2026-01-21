<x-app-layout>

    <!--Schwarze Bubble mit Text und Bild-->
    <div class="bg-black text-white px-6 py-10 rounded-full max-w-6xl mx-auto space-y-8 mt-6">

        <!--Überschrift-->
        <h1 class="text-3xl font-bold text-white text-center">
            Der erste Pinzgauer Videowettbewerb
        </h1>

        <!--Sub-Heading, Main-Text, Bild und Verlinkung-->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">

            <!--Textblock-->
            <div class="space-y-4 ml-20">
                <h2 class="text-xl font-semibold text-white">
                    Was macht den Pinzgau für dich besonders?
                </h2>
                <p class="text-white text-base leading-relaxed">
                    Unter diesem Motto starten wir (Arian, David, Noah und Samuel -
                    aber mehr zu uns weiter unten) den ersten Video- und
                    Fotowettbewerb für Jugendliche im Pinzgau. Dabei zählen wir
                    auf euch. Ob Landschaft, Bräuche oder einfach nur die
                    Menschen, was mögt ihr am liebsten im Pinzgau. Lorem ipsum
                    dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    eirmod tempor invidunt ut labore et dolore magna aliquyam
                    erat, sed diam voluptua. At vero eos et accusam et justo duo
                    dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                    amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed
                </p>
                <a href="{{ route('teilnahme') }}" class="text-brandpurple underline hover:text-purple-400 transition">
                    -> Mehr zu den Teilnahmebedingungen
                </a>
            </div>

            <!--Bildblock-->
            <div>
                <img src="#" alt="" class="w-full h-auto rounded-lg object-cover">
            </div>
        </div>

        <!--lila Balken-->
        <div class="h-2 bg-[#A594F9] rounded-full ml-72">
        </div>
    </div>
</x-app-layout>
