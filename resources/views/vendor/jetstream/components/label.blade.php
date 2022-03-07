@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }} style="padding:20px 0 20px 0">
    {{ $value ?? $slot }}
</label>
