<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $btnText;
    public $typeOfButton;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $btnText, string $typeOfButton)
    {
        $this->btnText = $btnText;
        $this->typeOfButton = $typeOfButton;
    }


    public function buttonClass() {
        if($this->typeOfButton === 'submit') {
            return 'submitButton';
        } elseif ($this->typeOfButton === 'cancel') {
            return 'cancelButton' ;
        } elseif ($this->typeOfButton === 'edit') {
            return 'editButton' ;
        } elseif ($this->typeOfButton === 'view') {
            return 'viewButton' ;
        } elseif ($this->typeOfButton === 'create') {
            return 'createButton' ;
        } elseif ($this->typeOfButton === 'delete') {
            return 'deleteButton' ;
        } elseif ($this->typeOfButton === 'complete') {
            return 'completeButton' ;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
