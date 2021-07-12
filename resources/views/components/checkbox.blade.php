<x-form-label
    {{ $attributes->whereStartsWith(['x-', 'wire:']) }}
    :field="$name"
    :value="$label"
    :class="$labelClasses"
>
    <input
        {{ $attributes->merge(['class' => 'form-checkbox'])->whereDoesntStartWith(['x-', 'wire:']) }}
        x-data
        x-ref="input"
        x-on:change="$dispatch('input', this.value)"
        id="{{ $name }}"
        type="checkbox"
        name="{{ $name }}"
        value="{{ $value }}"
        {{ $checked }}
        wire:ignore
    >

    @error($nameInDotNotation)
        <p class="mt-1 text-red-600 text-sm">
            {{ str_replace($nameInDotNotation, "'{$label}'", $message) }}
        </p>
    @enderror

    <span
        class="text-sm italic text-gray-400"
    >
        {{ $helpText }}
    </span>
</x-form-label>
