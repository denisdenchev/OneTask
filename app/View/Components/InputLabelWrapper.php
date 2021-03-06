<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputLabelWrapper extends Component
{

    // public $labelFor;
    public $labelValue;
    public $inputType;
    public $inputName;
    public $inputPlcHolder;
    public $inputValue;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $labelValue, string $inputType, string $inputName, string $inputPlcHolder, string $inputValue)
    {
        $this->labelValue = $labelValue;
        $this->inputType = $inputType;
        $this->inputName = $inputName;
        $this->inputPlcHolder = $inputPlcHolder;
        $this->inputValue = $inputValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-label-wrapper');
    }
}
