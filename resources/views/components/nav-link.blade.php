@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-lg md:text-base sm:text-sm font-medium leading-5 text-brandpurple dark:text-gray-100 focus:outline-none'
            : 'inline-flex items-center px-1 pt-1 text-lg md:text-base sm:text-sm font-medium leading-5 text-white dark:text-gray-400 hover:text-purple-400 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
