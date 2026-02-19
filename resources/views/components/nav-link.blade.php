@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-lg md:text-base sm:text-sm font-medium leading-5 text-brandpurple focus:outline-none'
            : 'inline-flex items-center px-1 pt-1 text-lg md:text-base sm:text-sm font-medium leading-5 text-white hover:text-brandpurple hover:border-gray-300 focus:outline-none focus:text-gray-700  focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
