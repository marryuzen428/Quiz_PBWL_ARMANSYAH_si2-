@props(['label', 'type' => 'text', 'name', 'value' => ''])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700 font-bold mb-2">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" 
           value="{{ old($name, $value) }}" 
           {{ $attributes->merge(['class' => 'w-full border border-gray-300 rounded px-3 py-2']) }}>
    @error($name)
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>
