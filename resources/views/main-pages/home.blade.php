<x-app-layout>

    <!-- Abschnitt 1 -->
    <div class="bg-black text-white px-10 md:px-20 py-12 md:py-8 max-w-7xl mx-auto md:my-10 lg:rounded-full md:rounded-none space-y-10">

        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center leading-tight">
            Der erste Pinzgauer Videowettbewerb
        </h1>

        <div class="flex flex-col md:flex-row items-center justify-between gap-8 sm:gap-10 md:gap-12 px-4 sm:px-8 md:px-10">
            <div class="flex-1 space-y-6">
                <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">
                    Was macht den Pinzgau für dich besonders?
                </h2>

                <p class="text-sm sm:text-base leading-relaxed text-justify pb-5">
                    Unter diesem Motto starten wir (das sind Arian, Dave, Noah und
                    Samuel) den ersten Pinzgauer Videowettbewerb für Jugendliche.
                    Besser gesagt für Schüler und Schülerinnen der Unterstufe, also
                    Mittelschule und Gymnasium. Unser Ziel ist es, dem Pinzgau ein
                    neues Gesicht zu geben. Dabei geht es auch um euch, denn egal,
                    was den Pinzgau für euch besonders macht, wir wollen es sehen. Ob
                    Sport, Brauch, die Menschen oder etwas ganz anderes, ihr
                    entscheidet. Also, startet gleich durch, wir freuen uns auf eure
                    Beiträge. Nähere Infos zu Teilnahmeschluss und -bedingungen
                    findet ihr unten.
                </p>

                <a href="{{ route('teilnahme') }}"
                   class="text-brandpurple underline hover:font-bold transition">
                    → Mehr zu den Teilnahmebedingungen
                </a>
            </div>

            <div class="flex-1">
                <img src="{{ asset('images/main/wettbewerb.jpg') }}"
                     alt="pinzgau"
                     class="w-full max-w-sm sm:max-w-md md:max-w-xl mx-auto rounded-2xl object-cover shadow-xl">
            </div>
        </div>

        <div class="hidden lg:flex h-1.5 bg-brandpurple rounded-full w-1/3 mx-auto mt-8"></div>
    </div>
    <!-- Ende Abschnitt 1 -->

    <!-- Abschnitt 2 -->
    <div class="bg-black text-white px-10 md:px-20 py-12 md:py-8 max-w-7xl mx-auto my-1 md:my-10 lg:rounded-full md:rounded-none space-y-10">

        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center leading-tight">
            Die Gewinne
        </h1>

        <div class="flex flex-col md:flex-row items-center justify-between gap-8 sm:gap-10 md:gap-12 px-4 sm:px-8 md:px-10">
            <div class="flex-1 space-y-6">
                <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">
                    Mitmachen lohnt sich!
                </h2>

                <p class="text-sm sm:text-base leading-relaxed text-justify pb-5">
                    Ein Wettbewerb wäre natürlich nichts ohne die passenden Preise.
                    Und die können wir dank unserer Partner auch bereitstellen. Den
                    Sieger bzw. das Siegerteam erwartet unter anderem … von …. Doch
                    auch die dahinter platzierten Teilnehmer erhalten stattliche Preise,
                    beispielsweise … von …. Und selbst wenn ihr nicht unter den Ersten
                    seid, unter allen Teilnehmern wird ein … von … verlost, mitmachen
                    lohnt sich also doppelt: Nicht nur gebt ihr dem Pinzgau mit euren
                    Videos ein neues Gesicht sondern habt gleichzeitig auch die Chance
                    auf hochwertige Preise. Demnach, nichts wie ran an die Kamera, die
                    Preise warten. Nähere Infos zu den Gewinnen gibt’s unten.
                </p>

                <a href="{{ route('gewinne') }}"
                   class="text-brandpurple underline hover:font-bold transition">
                    → Mehr zu den Gewinnen
                </a>
            </div>

            <div class="flex-1">
                <img src="{{ asset('images/main/gewinne.jpg') }}"
                     alt="preis"
                     class="w-full max-w-sm sm:max-w-md md:max-w-xl mx-auto rounded-2xl object-cover shadow-xl">
            </div>
        </div>

        <div class="hidden lg:flex h-1.5 bg-brandpurple rounded-full w-1/3 mx-auto mt-8"></div>
    </div>
    <!-- Ende Abschnitt 2 -->

    <!-- Abschnitt 3 -->
    <div class="bg-black text-white px-10 md:px-20 py-12 md:py-8 max-w-7xl mx-auto my-1 md:my-10 lg:rounded-full md:rounded-none space-y-10">

        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center leading-tight">
            Unsere Partner
        </h1>

        <div class="flex flex-col md:flex-row items-center justify-between gap-8 sm:gap-10 md:gap-12 px-4 sm:px-8 md:px-10">
            <div class="flex-1 space-y-6">
                <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">
                    Vielen Dank an alle Partner für die Unterstützung!
                </h2>

                <p class="text-sm sm:text-base leading-relaxed text-justify pb-5">
                    Solch ein Projekt bringt nicht nur einen organisatorischen Aufwand
                    mit sich, sondern auch gewisse Kosten. Diese Kosten wollen
                    gedeckt werden. Unsere Partner tragen einen wesentlichen Teil dazu
                    bei, daher verdienen auch sie einen besonderen Platz in diesem
                    Projekt. Auch die große Vielfalt an Preisen wäre ohne unsere Partner
                    in dieser Form nicht möglich. Deshalb an dieser Stelle einmal ein
                    großes Dankeschön an alle unsere Partner. Genauere Infos und
                    weitere Angebote von unseren Partnern erhaltet ihr über den Link
                    unten. Also informiert euch gerne über die Unternehmen, die hinter
                    diesem Projekt stehen und es erst möglich machen.
                </p>

                <a href="{{ route('partner') }}"
                   class="text-brandpurple underline hover:font-bold transition">
                    → Mehr zu unseren Partnern
                </a>
            </div>

            <div class="flex-1">
                <img src="{{ asset('images/main/partner.png') }}"
                     alt="partnerlogos"
                     class="w-full max-w-sm sm:max-w-md md:max-w-xl mx-auto rounded-2xl object-cover shadow-xl">
            </div>
        </div>

        <div class="hidden lg:flex h-1.5 bg-brandpurple rounded-full w-1/3 mx-auto mt-8"></div>
    </div>
    <!-- Ende Abschnitt 3 -->

    <!-- Abschnitt 4 -->
    <div class="bg-black text-white px-10 md:px-20 py-12 md:py-8 max-w-7xl mx-auto md:my-10 lg:rounded-full md:rounded-none space-y-10">

        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center leading-tight">
            Das sind wir
        </h1>

        <div class="flex flex-col md:flex-row items-center justify-between gap-8 sm:gap-10 md:gap-12 px-4 sm:px-8 md:px-10">
            <div class="flex-1 space-y-6">
                <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">
                    Vier Maturanten der HAK Zell am See
                </h2>

                <p class="text-sm sm:text-base leading-relaxed text-justify pb-5">
                    Seit nunmehr vier Jahren sehen wir uns fast täglich im Klassenraum
                    und auch privat haben sich unsere Wege immer öfter getroffen.
                    Daher war jedem von uns schnell klar, mit wem dieses Projekt
                    umgesetzt werden soll. Ein solch umfangreiches Projekt erfordert
                    natürlich eine perfekte Arbeitsteilung und die sieht wie folgt aus:
                    Während sich Arian um’s Marketing kümmert, betreut Dave unsere
                    Partner. Gleichzeitig ist Noah für den technischen Teil der Website
                    zuständig und Samuel zeigt sich für’s Corporate Design unseres
                    Projekts verantwortlich. Wenn ihr mehr über uns erfahren wollt,
                    laden wir euch ein, auf den Link unten zu klicken.
                </p>

                <a href="{{ route('ueberuns') }}"
                   class="text-brandpurple underline hover:font-bold transition">
                    → Mehr zu uns
                </a>
            </div>

            <div class="flex-1">
                <img src="{{ asset('images/main/wir.jpeg') }}"
                     alt="wir vier"
                     class="w-full max-w-sm sm:max-w-md md:max-w-xl mx-auto rounded-2xl object-cover shadow-xl">
            </div>
        </div>

        <div class="hidden lg:flex h-1.5 bg-brandpurple rounded-full w-1/3 mx-auto mt-8"></div>
    </div>
    <!-- Ende Abschnitt 4 -->

</x-app-layout>
