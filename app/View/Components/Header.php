<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    public $linkText;
    public $linkUrl;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $linkText, string $linkUrl)
    {
        $this->linkText = $linkText;
        $this->linkUrl = $linkUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
