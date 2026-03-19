<x-app-layout>
    <div class="py-6">
        <div class="mx-auto max-w-6xl px-4">

            <div class="relative overflow-hidden rounded-[3rem] bg-black px-8 py-10 shadow-2xl dark:border-white dark:border-2">
                {{-- Titel --}}
                <div class="mb-6 flex items-start justify-between">
                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold leading-tight text-white">
                        Video einreichen
                    </h1>
                    {{-- Button wurde hier entfernt und in die rechte Spalte verschoben --}}
                </div>

                <div class="max-w-4xl text-gray-200">
                    {{-- Success --}}
                    @if(session('success'))
                        <div class="mb-6 rounded-md border border-green-500/40 bg-green-500/10 px-4 py-3 text-green-300">
                            {{ session('success') }}
                        </div>
                    @endif

                    @php
                        $oldPartners = old('partners', []);
                    @endphp

                    {{-- 2-Spalten-Formular --}}
                    <form method="POST" action="{{ route('einreichen.store') }}" class="grid grid-cols-1 md:grid-cols-2 gap-5" id="submission-form" novalidate>
                        @csrf

                        {{-- ========== LINKE SPALTE ========== --}}
                        <div class="space-y-5">
                            {{-- Vorname --}}
                            <div>
                                <label for="vorname" class="block text-sm text-gray-300 mb-1">Vorname</label>
                                <input
                                    id="vorname"
                                    type="text"
                                    name="vorname"
                                    value="{{ old('vorname') }}"
                                    required
                                    placeholder="Vornamen eingeben..."
                                    class="w-full rounded-full bg-black px-4 py-2 text-gray-200
                                           border border-gray-600/70 placeholder:text-gray-500
                                           focus:border-brandpurple focus:ring-0"
                                    data-required
                                >
                                @error('vorname') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                            </div>

                            {{-- Nachname --}}
                            <div>
                                <label for="nachname" class="block text-sm text-gray-300 mb-1">Nachname</label>
                                <input
                                    id="nachname"
                                    type="text"
                                    name="nachname"
                                    value="{{ old('nachname') }}"
                                    required
                                    placeholder="Nachnamen eingeben..."
                                    class="w-full rounded-full bg-black px-4 py-2 text-gray-200
                                           border border-gray-600/70 placeholder:text-gray-500
                                           focus:border-brandpurple focus:ring-0"
                                    data-required
                                >
                                @error('nachname') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                            </div>

                            {{-- Schule (Select) --}}
                            <div>
                                <label for="schule" class="block text-sm text-gray-300 mb-1">Schule</label>
                                <select
                                    id="schule"
                                    name="schule"
                                    required
                                    class="w-full rounded-full bg-black px-4 py-2 text-gray-200
                                           border border-gray-600/70 focus:border-brandpurple focus:ring-0"
                                    data-required
                                >
                                    <option value="" disabled {{ old('schule') ? '' : 'selected' }}>Schule auswählen...</option>
                                    <option value="mittelschule_mittersill" @selected(old('schule')==='mittelschule_mittersill')>Mittelschule Mittersill</option>
                                    <option value="mittelschule_neukirchen_am_grossvenediger" @selected(old('schule')==='mittelschule_neukirchen_am_grossvenediger')>Mittelschule Neukirchen am Großvenediger</option>
                                    <option value="mittelschule_rauris" @selected(old('schule')==='mittelschule_rauris')>Mittelschule Rauris</option>
                                    <option value="mittelschule_taxenbach" @selected(old('schule')==='mittelschule_taxenbach')>Mittelschule Taxenbach</option>
                                    <option value="mittelschule_uttendorf" @selected(old('schule')==='mittelschule_uttendorf')>Mittelschule Uttendorf</option>
                                    <option value="mittelschule_bramberg_am_wildkogel" @selected(old('schule')==='mittelschule_bramberg_am_wildkogel')>Mittelschule Bramberg am Wildkogel</option>
                                    <option value="neue_und_musikmittelschule_zell_am_see" @selected(old('schule')==='neue_und_musikmittelschule_zell_am_see')>Neue &amp; Musikmittelschule Zell am See</option>
                                    <option value="mittelschule_maishofen" @selected(old('schule')==='mittelschule_maishofen')>Mittelschule Maishofen</option>
                                    <option value="gym_zell" @selected(old('schule')==='gym_zell')>Gym Zell</option>
                                    <option value="mittelschule_leogang" @selected(old('schule')==='mittelschule_leogang')>Mittelschule Leogang</option>
                                    <option value="mittelschule_saalfelden_stadt" @selected(old('schule')==='mittelschule_saalfelden_stadt')>Mittelschule Saalfelden Stadt</option>
                                    <option value="mittelschule_saalfelden_bahnhof" @selected(old('schule')==='mittelschule_saalfelden_bahnhof')>Mittelschule Saalfelden Bahnhof</option>
                                    <option value="hib_saalfelden" @selected(old('schule')==='hib_saalfelden')>Hib Saalfelden</option>
                                    <option value="ms_lofer" @selected(old('schule')==='ms_lofer')>MS Lofer</option>
                                    <option value="ms_bruck" @selected(old('schule')==='ms_bruck')>MS Bruck</option>
                                    <option value="ms_kaprun" @selected(old('schule')==='ms_kaprun')>MS Kaprun</option>
                                    <option value="ms_lend" @selected(old('schule')==='ms_lend')>MS Lend</option>
                                </select>
                                @error('schule') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                            </div>

                            {{-- E-Mail --}}
                            <div>
                                <label for="email" class="block text-sm text-gray-300 mb-1">Email</label>
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    placeholder="Email eingeben..."
                                    class="w-full rounded-full bg-black px-4 py-2 text-gray-200
                                           border border-gray-600/70 placeholder:text-gray-500
                                           focus:border-brandpurple focus:ring-0"
                                    data-required
                                >
                                @error('email') <p class="mt-1 text-xs text-red-400">Korrekte E-Mail eingeben</p> @enderror
                            </div>

                            {{-- Video Link + Tutorial-Link --}}
                            <div>
                                <div class="flex items-center justify-between mb-1">
                                    <label for="url" class="block text-sm text-gray-300">Video Link</label>
                                    <a
                                        href="https://support.google.com/youtube/answer/57407?hl=de"
                                        target="_blank"
                                        rel="noopener"
                                        class="text-brandpurple text-xs underline hover:opacity-80"
                                    >
                                        Tutorial: YouTube-Video hochladen
                                    </a>
                                </div>
                                <input
                                    id="url"
                                    type="url"
                                    name="url"
                                    value="{{ old('url') }}"
                                    required
                                    placeholder="Video Link eingeben..."
                                    class="w-full rounded-full bg-black px-4 py-2 text-gray-200
                                           border border-gray-600/70 placeholder:text-gray-500
                                           focus:border-brandpurple focus:ring-0"
                                    data-required
                                >
                                @error('url') <p class="mt-1 text-xs text-red-400">ganzen url inkl. "https://" eingeben
                                    <br> https://www.youtube.com/watch?v=dQw4w9WgXcQ
                                </p> @enderror
                            </div>

                            {{-- AGB / Teilnahmebedingungen Checkbox (öffnet Modal) --}}
                            <div class="flex items-start gap-2 text-sm text-gray-400">
                                <input
                                    id="agb"
                                    type="checkbox"
                                    name="agb"
                                    value="1"
                                    class="mt-1 rounded border-gray-600 bg-black text-brandpurple focus:ring-brandpurple focus:ring-offset-0"
                                    data-required
                                    {{ old('agb') ? 'checked' : '' }}
                                >
                                <label for="agb">
                                    Ich akzeptiere die
                                    <button type="button" id="open-terms" class="text-brandpurple underline hover:font-bold">
                                        Teilnahmebedingungen
                                    </button>
                                </label>
                            </div>
                            @error('agb') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror

                            {{-- Submit --}}
                            <button
                                id="submit-btn"
                                type="submit"
                                class="w-40 rounded-full border border-brandpurple px-6 py-2
                   text-brandpurple font-bold transition
                   hover:bg-brandpurple hover:text-black
                   disabled:opacity-40 disabled:cursor-not-allowed
                   disabled:hover:bg-transparent disabled:hover:text-brandpurple">
                                Einreichen
                            </button>
                            <p class="pt-1 text-xs text-white">
                                * alle Felder müssen befüllt werden
                            </p>
                        </div>

                        {{-- ========== RECHTE SPALTE ========== --}}
                        <div class="space-y-5">
                            {{-- Button: neben "Vorname" (rechte Spalte, ganz oben) --}}
                            <div class="flex justify-end">
                                <button
                                    type="button"
                                    id="add-partner-btn"
                                    class="text-brandpurple hover:underline text-sm md:text-base"
                                >
                                    + Partner hinzufügen
                                </button>
                            </div>

                            {{-- Partner (max. 3) --}}
                            <div id="partners-wrapper">
                                <div id="partners-container" class="space-y-5">
                                    @foreach($oldPartners as $idx => $p)
                                        <div class="partner-row flex gap-2" data-partner-row>
                                            <input
                                                type="text"
                                                name="partners[{{ $idx }}][vorname]"
                                                value="{{ $p['vorname'] ?? '' }}"
                                                placeholder="Partner Vorname"
                                                class="flex-1 rounded-full bg-black px-4 py-2 text-gray-200
                                           border border-gray-600/70 placeholder:text-gray-500
                                           focus:border-brandpurple focus:ring-0"
                                                data-partner-vorname
                                            >
                                            <input
                                                type="text"
                                                name="partners[{{ $idx }}][nachname]"
                                                value="{{ $p['nachname'] ?? '' }}"
                                                placeholder="Partner Nachname"
                                                class="flex-1 rounded-full bg-black px-4 py-2 text-gray-200
                                           border border-gray-600/70 placeholder:text-gray-500
                                           focus:border-brandpurple focus:ring-0"
                                                data-partner-nachname
                                            >
                                            <button type="button" class="shrink-0 rounded-full border border-gray-600/70 px-3 text-gray-300 hover:bg-gray-800" data-remove-partner>Entfernen</button>
                                        </div>
                                    @endforeach
                                </div>
                                @error('partners') <p class="mt-1 text-xs text-red-400">Partner hinzufügen</p> @enderror
                                @error('partners.*.vorname') <p class="mt-1 text-xs text-red-400">Partner hinzufügen</p> @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Teilnahmebedingungen-Modal --}}
    <div id="terms-modal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative mx-auto mt-10 w-[95%] max-w-3xl rounded-2xl border border-gray-700 bg-black shadow-xl">
            <div class="flex items-center justify-between border-b border-gray-800 px-4 py-3">
                <h2 class="text-white font-semibold">Teilnahmebedingungen</h2>
                <button id="close-terms" class="text-gray-400 hover:text-white">&times;</button>
            </div>
            <div class="p-0">
                <iframe src="{{ route('teilnahme') }}" class="w-full h-[70vh] rounded-b-2xl" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    {{-- Inline JS (Vanilla) – unverändert --}}
    <script>
        /* Einreichen – Frontend-Logik (Vanilla JS)
           - Button bleibt sichtbar, wird nur auf Basis der Hauptfelder aktiviert
           - Partner optional (max. 3), beeinflussen die Aktivierung nicht
           - Teilnahmebedingungen als Modal (öffnen/schließen, ESC & Overlay)
        */
        (() => {
            // Helpers
            const q  = (sel, root = document) => root.querySelector(sel);
            const qa = (sel, root = document) => Array.from(root.querySelectorAll(sel));
            const escapeHtml = (str) =>
                String(str).replace(/[&<>\"']/g, s => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[s]));

            // Elements – Hauptfelder
            const submitBtn = q('#submit-btn');
            const vorname   = q('#vorname');
            const nachname  = q('#nachname');
            const email     = q('#email');
            const schule    = q('#schule');
            const url       = q('#url');
            const agb       = q('#agb');
            const modal      = q('#terms-modal');
            const openTerms  = q('#open-terms');
            const closeTerms = q('#close-terms');

            function showModal() {
                if (!modal) return;
                modal.classList.remove('hidden');
                document.addEventListener('keydown', onEscClose);
                modal.addEventListener('click', onBackdropClick);
            }
            function hideModal() {
                if (!modal) return;
                modal.classList.add('hidden');
                document.removeEventListener('keydown', onEscClose);
                modal.removeEventListener('click', onBackdropClick);
            }
            function onEscClose(e) { if (e.key === 'Escape') hideModal(); }
            function onBackdropClick(e) { if (e.target === modal) hideModal(); }

            openTerms?.addEventListener('click', showModal);
            closeTerms?.addEventListener('click', hideModal);

            // Partner-Handling (max. 3)
            const addPartnerBtn     = q('#add-partner-btn');
            const partnersContainer = q('#partners-container');
            const MAX_PARTNERS      = 3;

            function partnerRows() { return partnersContainer ? qa('[data-partner-row]', partnersContainer) : []; }
            function currentPartnerCount() { return partnerRows().length; }

            function updateAddPartnerState() {
                if (!addPartnerBtn) return;
                const full = currentPartnerCount() >= MAX_PARTNERS;
                addPartnerBtn.disabled = full;
                addPartnerBtn.classList.toggle('opacity-50', full);
                addPartnerBtn.classList.toggle('cursor-not-allowed', full);
            }

            function templatePartnerRow(index, values = { vorname: '', nachname: '' }) {
                return `
      <div class="partner-row flex gap-2" data-partner-row>
        <input type="text" name="partners[${index}][vorname]" value="${escapeHtml(values.vorname || '')}"
          placeholder="Partner Vorname"
          class="flex-1 rounded-full bg-black px-4 py-2 text-gray-200 border border-gray-600/70 placeholder:text-gray-500 focus:border-brandpurple focus:ring-0"
          data-partner-vorname
        >
        <input type="text" name="partners[${index}][nachname]" value="${escapeHtml(values.nachname || '')}"
          placeholder="Partner Nachname"
          class="flex-1 rounded-full bg-black px-4 py-2 text-gray-200 border border-gray-600/70 placeholder:text-gray-500 focus:border-brandpurple focus:ring-0"
          data-partner-nachname
        >
        <button type="button" class="shrink-0 rounded-full border border-gray-600/70 px-3 text-gray-300 hover:bg-gray-800" data-remove-partner>Entfernen</button>
      </div>
    `;
            }

            function addPartnerRow(values = {}) {
                if (!partnersContainer) return;
                if (currentPartnerCount() >= MAX_PARTNERS) return;
                const idx = currentPartnerCount();
                const wrap = document.createElement('div');
                wrap.innerHTML = templatePartnerRow(idx, values);
                partnersContainer.appendChild(wrap.firstElementChild);
                updateAddPartnerState();
                // Partner optional -> keine Abhängigkeit für Submit
                updateSubmitState();
            }

            function renumberPartnerNames() {
                if (!partnersContainer) return;
                partnerRows().forEach((row, i) => {
                    const v = q('[data-partner-vorname]', row);
                    const n = q('[data-partner-nachname]', row);
                    if (v) v.name = `partners[${i}][vorname]`;
                    if (n) n.name = `partners[${i}][nachname]`;
                });
            }

            addPartnerBtn?.addEventListener('click', () => addPartnerRow());
            partnersContainer?.addEventListener('click', (e) => {
                const btn = e.target.closest('[data-remove-partner]');
                if (!btn) return;
                const row = btn.closest('[data-partner-row]');
                row?.remove();
                renumberPartnerNames();
                updateAddPartnerState();
                updateSubmitState();
            });

            // Submit-Button Logik – nur Hauptfelder zählen (Partner sind optional)
            function filledText(el)   { return !!el && (el.value || '').trim().length > 0; }
            function filledSelect(el) { return !!el && !!el.value; }
            function checked(el)      { return !el || el.checked; } // wenn kein AGB vorhanden, nicht blockieren

            function isBaseValid() {
                return filledText(vorname)
                    && filledText(nachname)
                    && filledText(email)
                    && filledSelect(schule)
                    && filledText(url)
                    && checked(agb);
            }

            function updateSubmitState() {
                if (!submitBtn) return;
                submitBtn.disabled = !isBaseValid();
            }

            // Events für Hauptfelder
            [[vorname,'input'], [nachname,'input'], [email,'input'], [schule,'change'], [url,'input'], [agb,'change']]
                .forEach(([el, evt]) => el && el.addEventListener(evt, updateSubmitState));

            // Initial
            updateSubmitState();
            updateAddPartnerState();
        })();
    </script>
</x-app-layout>
