<x-form-group
    :class="$groupClasses"
    :errors="$errors"
    :helpText="$helpText"
>
    @if ($label)
        <x-form-label
            :field="$name"
            :value="$label"
            class="{{ $labelClasses }}"
        />
    @endif

    <input
        type="password"
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes }}
    >
</x-form-group>
