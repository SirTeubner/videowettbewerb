{{-- resources/views/einreichen.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Einreichen') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            {{-- Success Message --}}
            @if(session('success'))
                <div class="mb-6 rounded-md border border-green-300 bg-green-50 px-4 py-3 text-green-700 dark:bg-green-900/30 dark:text-green-200">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Optional: globale Fehlerliste --}}
            @if($errors->any())
                <div class="mb-6 rounded-md border border-red-300 bg-red-50 px-4 py-3 text-red-700 dark:bg-red-900/30 dark:text-red-200">
                    <strong>Es sind Fehler aufgetreten:</strong>
                    <ul class="list-disc ps-5 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('einreichen.store') }}" class="space-y-6" novalidate>
                        @csrf

                        {{-- E-Mail --}}
                        <div>
                            <x-input-label for="email" :value="__('E‑Mail')" />
                            <x-text-input
                                id="email"
                                name="email"
                                type="email"
                                class="mt-1 block w-full"
                                :value="old('email')"
                                required
                                autocomplete="email"
                                placeholder="name@example.com"
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        {{-- Benutzername --}}
                        <div>
                            <x-input-label for="username" :value="__('Benutzername')" />
                            <x-text-input
                                id="username"
                                name="username"
                                type="text"
                                class="mt-1 block w-full"
                                :value="old('username')"
                                required
                                minlength="3"
                                autocomplete="username"
                                placeholder="z. B. max_muster"
                            />
                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>

                        {{-- URL --}}
                        <div>
                            <x-input-label for="url" :value="__('URL')" />
                            <x-text-input
                                id="url"
                                name="url"
                                type="url"
                                class="mt-1 block w-full"
                                :value="old('url')"
                                required
                                inputmode="url"
                                placeholder="https://beispiel.de"
                            />
                            <x-input-error :messages="$errors->get('url')" class="mt-2" />
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                Bitte vollständige URL inkl. <code>https://</code> angeben.
                            </p>
                        </div>

                        <div class="flex items-center gap-3">
                            <x-primary-button>
                                {{ __('Absenden') }}
                            </x-primary-button>

                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Dauer: wenige Sekunden
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
