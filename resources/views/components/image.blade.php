<x-form-group
    :class="$groupClasses"
    :errors="$errors"
>
    <input
        type="image"
        :name="$name"
        :value="$value"
        {!! $fieldAttributes !!}
    >
</x-form-group>