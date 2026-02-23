<nav x-data="{ open: false }" class="text-white sticky top-0 z-10">
    <!-- Primary Navigation Menu -->
    <div class="bg-black mx-auto relative flex items-center justify-between h-16 px-10">
        <div class="lg:mx-auto flex justify-center items-center">

            <!-- Navigation Links -->
            <div class="hidden md:flex gap-6 lg:gap-10">

                <!-- Über uns -->
                <x-nav-link :href="route('ueberuns')" :active="request()->routeIs('ueberuns')">
                    Über uns
                </x-nav-link>

                <!-- Partner -->
                <x-nav-link :href="route('partner')" :active="request()->routeIs('partner')">
                    Partner
                </x-nav-link>

                <!-- Logo -->
                <a href="{{ route('home') }}" class="focus:outline-none">
                    <x-application-logo class="h-10 w-auto" />
                </a>

                <!-- Teilnahme -->
                <x-nav-link :href="route('teilnahme')" :active="request()->routeIs('teilnahme')">
                    Teilnahme
                </x-nav-link>

                <!-- Gewinne -->
                <x-nav-link :href="route('gewinne')" :active="request()->routeIs('gewinne')">
                    Gewinne
                </x-nav-link>

                <!-- Einreichen Button -->
                <a href="{{ route('einreichen') }}" class="flex">
                    <x-primary-button>
                        Einreichen
                    </x-primary-button>
                </a>
            </div>

           <!-- Navbar sm screen -->
            <div class="relative flex items-center w-full md:hidden">

                <!-- Hamburger -->
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Logo -->
                <a href="{{ route('home') }}" class="md:hidden flex items-center">
                    <x-application-logo class="h-10 w-auto" />
                </a>
            </div>
        </div>
    </div>

    <!-- Lila Trennlinie am linken Rand -->
    <div class="block bg-transparent">
        <hr class="border-brandpurple md:w-80 border-2">
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden py-5 px-5 space-y-2 bg-black">

        <div>
            <x-responsive-nav-link :href="route('ueberuns')" :active="request()->routeIs('ueberuns')">
                {{ __('Über uns') }}
            </x-responsive-nav-link>
        </div>

            <div>
            <x-responsive-nav-link :href="route('partner')" :active="request()->routeIs('partner')">
                {{ __('Partner') }}
            </x-responsive-nav-link>
        </div>

        <div>
            <x-responsive-nav-link :href="route('teilnahme')" :active="request()->routeIs('teilnahme')">
                {{ __('Teilnahme') }}
            </x-responsive-nav-link>
        </div>

        <div>
            <x-responsive-nav-link :href="route('gewinne')" :active="request()->routeIs('gewinne')">
                {{ __('Gewinne') }}
            </x-responsive-nav-link>
        </div>

        <a href="{{ route('einreichen') }}">
            <x-primary-button class="mt-7">
                Einreichen
            </x-primary-button>
        </a>
    </div>
</nav>
