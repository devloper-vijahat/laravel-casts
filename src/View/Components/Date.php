<?php

namespace GeneaLabs\LaravelCasts\View\Components;

use Illuminate\Support\Carbon;

class Date extends BaseComponent
{
    public function __construct(
        string $name,
        string $value = null,
        string $label = null,
        string $labelClasses = "",
        string $groupClasses = "",
        string $errorClasses = "",
        string $helpClasses = "",
        string $helpText = ""
    ) {
        parent::__construct($name, $value, $label, $labelClasses, $groupClasses, $errorClasses, $helpClasses, $helpText);

        if ($value !== null) {
            if (! $value instanceof Carbon) {
                $value = (new Carbon)->parse($value);
            }

            $value = $value->format("Y-m-d");
        }

        $this->value = $value;
    }
}
