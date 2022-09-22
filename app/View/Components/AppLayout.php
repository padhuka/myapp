<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tittle;

    public $styles = null;

    public function __construct($tittle =null)
    {
        // $this->tittle = $tittle ? $tittle : "Belajar Laravel";

        $this->tittle = $tittle ?? "Belajar Laravel";
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app');
    }
}
