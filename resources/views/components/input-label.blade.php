@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-gray-500 font-bold uppercase dark:text-gray-500 mb-2']) }}>
    {{ $value ?? $slot }}
</label>
