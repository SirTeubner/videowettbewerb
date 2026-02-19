@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-lg md:text-base sm:text-sm font-bold leading-5 text-brandpurple focus:outline-none'
            : 'inline-flex items-center px-1 pt-1 text-lg md:text-base sm:text-sm font-medium hover:font-bold leading-5 text-white hover:text-brandpurple focus:outline-none 0 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
