@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-white dark:border-white text-white dark:text-black dark:hover:text-white focus:border-white dark:focus:border-white transition duration-150 ease-in-out'
    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-black dark:text-black dark:hover:text-white hover:border-gray-300 dark:hover:border-gray-700 focus:text-gray-700 dark:focus:text-white focus:border-gray-300 dark:focus:border-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
