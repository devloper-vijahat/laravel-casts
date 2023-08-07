<x-form-group
    {{ $attributes->only(['x-show', 'x-if', 'wire:model']) }}
    :class="$groupClasses"
>
    @if ($label)
        <x-form-label
            :field="$name"
            :value="$label"
            :class="$labelClasses"
        />
    @endif

    <div
        {{ $attributes->except(['x-show', 'x-if', 'wire:model']) }}
        x-data="{
            selected: {{ $checked === 'checked' ? 'true' : 'false' }},
            value: '{{ $value }}',
            toggle: function (dispatch) {
                this.selected = ! this.selected;
                dispatch('input', (this.selected == true ? this.value : null));
            }
        }"
    >
        <input
            type="hidden"
            name="{{ $name }}"
            x-bind:value="selected == true ? '{{ $value }}' : ''"
        >
        <button
            x-on:click="toggle($dispatch)"
            type="button"
            class="w-10 h-5 relative inline-flex items-center justify-center flex-shrink-0 rounded-full cursor-pointer group focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
            aria-pressed="false"
        >
            <span
                class="sr-only"
            >
                Use setting
            </span>
            <span
                aria-hidden="true"
                class="w-full h-full absolute bg-transparent rounded-md pointer-events-none"
            ></span>
            <!-- Enabled: "bg-blue-600", Not Enabled: "bg-gray-200" -->
            <span
                x-bind:class="{ 'bg-blue-600': selected, 'bg-gray-200': ! selected }"
                aria-hidden="true"
                class="mx-auto h-4 absolute transition-colors duration-200 ease-in-out rounded-full pointer-events-none w-9"
            ></span>
            <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
            <span
                x-bind:class="{ 'translate-x-5': selected, 'translate-x-0': ! selected }"
                aria-hidden="true"
                class="w-5 h-5 absolute left-0 inline-block transition-transform duration-200 ease-in-out transform bg-white border border-gray-200 rounded-full shadow pointer-events-none ring-0"
            ></span>
        </button>
    </div>

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
</x-form-group>
