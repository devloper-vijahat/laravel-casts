<?php

declare(strict_types=1);

namespace GeneaLabs\LaravelCasts\View\Components;

class Money extends Input
{
    public string $code = "USD";
    public int $decimals = 2;
    public string $symbol = "\$";

    public function __construct(
        string $name,
        ?string $code = "USD",
        ?int $decimals = 2,
        ?string $symbol = "\$",
        ?string $value = "0",
        ?string $labelClasses = "",
        ?string $groupClasses = "",
        ?string $errorClasses = "",
        ?string $helpClasses = "",
        ?string $helpText = "",
        ?string $label = null,
    ) {
        $this->code = $code;
        $this->decimals = $decimals;
        $this->symbol = $symbol;

        parent::__construct(
            $name,
            number_format(intval($value) / 100, $decimals),
            $labelClasses,
            $groupClasses,
            $errorClasses,
            $helpClasses,
            $helpText,
            $label,
        );
    }
}
