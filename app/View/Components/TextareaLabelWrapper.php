<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextareaLabelWrapper extends Component
{

    public $textAreaName;
    public $labelValue;
    public $textAreaPlaceholder;
    public $textAreaValue;
    public $rows;
    public $cols;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $textAreaName, string $textAreaPlaceholder, string $cols, string $rows, string $labelValue, string $textAreaValue)
    {
        $this->textAreaName = $textAreaName;
        $this->textAreaValue = $textAreaValue;
        $this->textAreaPlaceholder = $textAreaPlaceholder;
        $this->labelValue = $labelValue;
        $this->rows = $rows;
        $this->cols = $cols;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.textarea-label-wrapper');
    }
}
