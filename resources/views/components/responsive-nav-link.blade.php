@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-brandpurple dark:border-indigo-600 text-start text-base font-medium text-brandpurple dark:text-indigo-300 bg-black dark:bg-indigo-900/50'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-white dark:text-gray-400 focus:text-brandpurple dark:focus:text-gray-200 focus:bg-black dark:focus:bg-gray-700 focus:border-brandpurple dark:focus:border-gray-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
