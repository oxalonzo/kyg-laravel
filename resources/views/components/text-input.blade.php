@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => ' border-0 border-b border-gray-300 dark:border-gray-300 dark:bg-gray-100 dark:text-gray-700 focus:border-yellow-300 dark:focus:border-yellow-300 focus:ring-0 shadow-none focus:shadow-[inset_0_-2px_0_0_rgba(253,224,71,1)] w-full p-3 ']) }}>
