@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-yellow-300 dark:border-yellow-300 text-start text-base font-medium text-yellow-300 dark:text-yellow-300 bg-yellow-50 dark:bg-yellow-300/50 focus:outline-none focus:text-yellow-300 dark:focus:text-yellow-300 focus:bg-yellow-300 dark:focus:bg-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-300 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
