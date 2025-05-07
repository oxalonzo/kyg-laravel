
@php
  
$clases = " text-sm text-gray-600 dark:text-gray-600 hover:text-gray-900 font-bold dark:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300 dark:focus:ring-offset-2"

@endphp

<a  {{ $attributes->merge(['class' => $clases]) }} >
    {{ $slot }}
</a>