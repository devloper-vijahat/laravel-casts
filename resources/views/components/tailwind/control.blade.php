@if (((! $isInButtonGroup && $type !== 'endButtonGroup') || ($isInButtonGroup && $type === 'buttonGroup')) && $type !== 'subform')
    @include ('genealabs-laravel-casts::components.tailwind.form-group-open')

    @if ($type !== 'checkbox' && $type !== 'submit')
        @label ($name, $name, ['label' => $options['label'] ?? ''], $options['escapeLabel'] ?? false)
    @endif
@endif

@include ("genealabs-laravel-casts::components.tailwind.{$type}")

@if (! $isInButtonGroup && $type !== 'subform')
    @include('genealabs-laravel-casts::components.tailwind.form-group-close')
@endif
