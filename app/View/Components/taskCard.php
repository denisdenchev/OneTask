<?php

namespace App\View\Components;

use Illuminate\View\Component;

class taskCard extends Component
{

    public $title;
    public $details;
    public $editTask;
    public $deleteTask;
    public $viewTask;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $details, string $editTask, string $deleteTask, string $viewTask)
    {
        $this->title=$title;
        $this->details=$details;
        $this->editTask=$editTask;
        $this->deleteTask=$deleteTask;
        $this->viewTask=$viewTask;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task-card');
    }
}
