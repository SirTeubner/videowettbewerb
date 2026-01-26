<nav x-data="{ open: false }" class="text-white sticky top-0">
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
            </div>

            <!-- Einreichen Button -->
            <a href="{{ route('einreichen') }}" class="hidden md:flex md:ms-10 lg:absolute lg:right-52">
                <x-primary-button>
                    Einreichen
                </x-primary-button>
            </a>

            <!-- Settings Dropdown
            @auth
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!- Authentication ->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            -->
            @endauth

           <!-- Navbar sm screen -->
            <div class="relative flex items-center w-full sm:hidden">

                <!-- Hamburger -->
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Logo -->
                <a href="{{ route('home') }}" class="sm:hidden translate-x-1/2 flex items-center">
                    <x-application-logo class="h-10 w-auto" />
                </a>
            </div>
        </div>
    </div>

    <!-- Lila Trennlinie am linken Rand -->
    <div class="block bg-transparent">
        <hr class="border-brandpurple w-80 border-2">
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden py-5 space-y-2 bg-black">
        <div>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>

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

        @auth
        <!-- Responsive Settings Options
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!- Authentication ->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        -->
        @endauth
    </div>
</nav>
