<x-app-layout>

    <div class="py-6">
        <div class="mx-auto max-w-6xl px-4">

            <div class="relative overflow-hidden rounded-[3rem] bg-black px-8 py-10 shadow-2xl dark:border-white dark:border-2">
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center leading-tight text-white  ">
                    Video einreichen
                </h1>

                <div class="max-w-xl text-gray-200">
                    {{-- Success --}}
                    @if(session('success'))
                        <div class="mb-6 rounded-md border border-green-500/40 bg-green-500/10 px-4 py-3 text-green-300">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Errors --}}
                    @if($errors->any())
                        <div class="mb-6 rounded-md border border-red-500/40 bg-red-500/10 px-4 py-3 text-red-300">
                            <ul class="list-disc ps-5">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('einreichen.store') }}" class="space-y-5">
                        @csrf

                        {{-- E-Mail --}}
                        <div>
                            <label for="email" class="block text-sm text-gray-300 mb-1">Email</label>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                placeholder="Email eingeben…"
                                class="w-full rounded-full bg-black px-4 py-2 text-gray-200
                                       border border-gray-600/70
                                       placeholder:text-gray-500
                                       focus:border-brandpurple focus:ring-0"
                            >
                            @error('email')
                            <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Vorname --}}
                        <div>
                            <label for="vorname" class="block text-sm text-gray-300 mb-1">Vorname</label>
                            <input
                                id="vorname"
                                type="text"
                                name="vorname"
                                value="{{ old('vorname') }}"
                                required
                                placeholder="Vornamen eingeben…"
                                class="w-full rounded-full bg-black px-4 py-2 text-gray-200
                                       border border-gray-600/70
                                       placeholder:text-gray-500
                                       focus:border-brandpurple focus:ring-0"
                            >
                            @error('vorname')
                            <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                            @enderror
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
                                placeholder="Nachnamen eingeben…"
                                class="w-full rounded-full bg-black px-4 py-2 text-gray-500
                                       border border-gray-600/70
                                       placeholder:text-gray-500
                                       focus:border-brandpurple focus:ring-0"
                            >
                            @error('nachname')
                            <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Schule (Select) --}}
                        <div>
                            <label for="schule" class="block text-sm text-gray-300 mb-1">Schule</label>
                            <select
                                id="schule"
                                name="schule"
                                required
                                class="w-full rounded-full bg-black px-4 py-2 text-gray-500
                                       border border-gray-600/70
                                       focus:border-brandpurple focus:ring-0"
                            >
                                <option value="" disabled {{ old('schule') ? '' : 'selected' }}>Schule auswählen…</option>
                                {{-- Beispieloptionen – später dynamisch befüllen --}}
                                <option value="schule_a" @selected(old('schule')==='schule_a')>Schule A</option>
                                <option value="schule_b" @selected(old('schule')==='schule_b')>Schule B</option>
                                <option value="schule_c" @selected(old('schule')==='schule_c')>Schule C</option>
                            </select>
                            @error('schule')
                            <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Video Link --}}
                        <div>
                            <label for="url" class="block text-sm text-gray-300 mb-1">Video Link</label>
                            <input
                                id="url"
                                type="url"
                                name="url"
                                value="{{ old('url') }}"
                                required
                                placeholder="Video Link eingeben…"
                                class="w-full rounded-full bg-black px-4 py-2 text-gray-200
                                       border border-gray-600/70
                                       placeholder:text-gray-500
                                       focus:border-brandpurple focus:ring-0"
                            >
                            @error('url')
                            <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- AGB / Teilnahmebedingungen Checkbox --}}
                        <div class="flex items-start gap-2 text-sm text-gray-400">
                            <input
                                id="agb"
                                type="checkbox"
                                name="agb"
                                value="1"
                                required
                                class="mt-1 rounded border-gray-600 bg-black text-indigo-500 focus:ring-indigo-500 focus:ring-offset-0"
                            >
                            <label for="agb">Ich akzeptiere die <a href="{{ route('teilnahme') }}" class="text-brandpurple underline hover:font-bold">Teilnahmebedingungen</a></label>
                        </div>
                        @error('agb')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                        @enderror

                        {{-- Submit --}}
                        <div class="pt-2">
                            <button
                                type="submit"
                                class="w-40 rounded-full border border-brandpurple  px-6 py-2
                                       text-brandpurple transition
                                       font-bold
                                       hover:bg-brandpurple hover:text-black">
                                Einreichen
                            </button>
                        </div>

                        <p class="pt-1 text-xs text-white">
                            * alle Felder müssen befüllt werden
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
