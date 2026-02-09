<x-app-layout>

    <!-- Abschnitt 1 -->
    <div class="bg-black text-white px-10 md:px-20 py-12 md:py-8 max-w-7xl mx-auto my-10 lg:rounded-full md:rounded-none space-y-10">

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center leading-tight">
            Der erste Pinzgauer Videowettbewerb
        </h1>

        <div class="flex flex-col md:flex-row items-center justify-between gap-8 sm:gap-10 md:gap-12 px-4 sm:px-8 md:px-10">
            <div class="flex-1 space-y-6">
                <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">
                    Was macht den Pinzgau für dich besonders?
                </h2>

                <p class="text-sm sm:text-base leading-relaxed text-justify pb-5">
                    Unter diesem Motto starten wir (das sind Arian, David, Noah und Samuel) den ersten Pinzgauer Video- und Fotowettbewerb für Jugendliche. Besser gesagt für Schüler und Schülerinnen der dritten und vierten Klasse Unterstufe. Der Videowettbewerb wird hierbei im Gruppenformat ausgetragen, während es beim Fotowettbewerb um Einzelleistungen geht. Unser Ziel ist es, dem Pinzgau ein neues Gesicht zu geben. Dabei geht es auch um euch, denn egal, was den Pinzgau für euch besonders macht, wir wollen es sehen. Ob Sport, Brauchtum, die Menschen oder etwas ganz anderes, ihr entscheidet. Also, startet gleich durch, wir freuen uns auf eure Videos und Fotos.
                </p>

                <a href="{{ route('teilnahme') }}"
                   class="text-brandpurple underline hover:text-purple-400 transition">
                    → Mehr zu den Teilnahmebedingungen
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
    <!-- Ende Abschnitt 1 -->

    <!-- Abschnitt 2 -->
    <div class="bg-black text-white px-10 md:px-20 py-12 md:py-8 max-w-7xl mx-auto my-10 lg:rounded-full md:rounded-none space-y-10">

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center leading-tight">
            Das gibt es zu gewinnen
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
    <!-- Ende Abschnitt 2 -->

    <!-- Abschnitt 3 -->
    <div class="bg-black text-white px-10 md:px-20 py-12 md:py-8 max-w-7xl mx-auto my-10 lg:rounded-full md:rounded-none space-y-10">

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center leading-tight">
            Unsere Partner
        </h1>

        <div class="flex flex-col md:flex-row items-center justify-between gap-8 sm:gap-10 md:gap-12 px-4 sm:px-8 md:px-10">
            <div class="flex-1 space-y-6">
                <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">
                    Ohne unsere Partner wäre das nicht möglich
                </h2>

                <p class="text-sm sm:text-base leading-relaxed text-justify pb-5">
                    Solch ein Projekt bringt nicht nur einen organisatorischen Aufwand mit
                    sich, sondern auch gewisse Kosten. Diese Kosten wollen gedeckt
                    werden. Unsere Partner tragen einen wesentlichen Teil dazu bei, daher
                    verdienen Sie auch einen besonderen Platz in unserem Projekt. Auch
                    unsere große Vielfalt an Preisen wäre ohne unsere Partner in der Form
                    nicht möglich. Deshalb an dieser Stelle einmal ein großes Dankeschön
                    an alle unsere Partner. Genauere Infos und Angebote von unseren
                    Partnern erhaltet ihr über den Link unten.
                </p>

                <a href="{{ route('teilnahme') }}"
                   class="text-brandpurple underline hover:text-purple-400 transition">
                    → Mehr zu unseren Partnern
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
    <!-- Ende Abschnitt 3 -->

    <!-- Abschnitt 4 -->
    <div class="bg-black text-white px-10 md:px-20 py-12 md:py-8 max-w-7xl mx-auto my-10 lg:rounded-full md:rounded-none space-y-10">

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center leading-tight">
            Das sind wir
        </h1>

        <div class="flex flex-col md:flex-row items-center justify-between gap-8 sm:gap-10 md:gap-12 px-4 sm:px-8 md:px-10">
            <div class="flex-1 space-y-6">
                <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">
                    Vier Maturanten mit einer Vision
                </h2>

                <p class="text-sm sm:text-base leading-relaxed text-justify pb-5">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                    erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                    ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                    ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                    sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                    dolore magna aliquyam erat, sed Lorem ipsum dolor sit amet,
                    consetetur sadipscing elitr, sed diam n clita kasd gubergren, no sea
                    takimata sanctus est Lorem ipsum Lorem ipsum dolor sit amet,
                    consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                </p>

                <a href="{{ route('teilnahme') }}"
                   class="text-brandpurple underline hover:text-purple-400 transition">
                    → Mehr zu uns
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
    <!-- Ende Abschnitt 4 -->

</x-app-layout>
