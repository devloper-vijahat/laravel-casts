<?php namespace GeneaLabs\LaravelCasts;

class Button extends Component
{
    public function __construct(string $value, array $options = [])
    {
        parent::__construct('', $value, $options);

        $this->attributes['options'] = $options;
        $this->excludedClasses = $this->excludedKeys->merge(collect([
            'form-control' => '',
        ]));
        $this->excludedKeys = $this->excludedKeys->merge(collect([
            'placeholder' => '',
        ]));
    }

    protected function renderBaseControl() : string
    {
        return app('form')->callParentMethod(
            $this->type,
            $this->value,
            $this->options
        );
    }

    public function getTypeAttribute() : string
    {
        return 'button';
    }
}
