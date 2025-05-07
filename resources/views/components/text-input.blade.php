@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-300 dark:bg-gray-100 dark:text-gray-700 focus:border-yellow-300 dark:focus:border-yellow-300 focus:ring-yellow-300 dark:focus:ring-yellow-300 rounded-md shadow-sm']) }}>
