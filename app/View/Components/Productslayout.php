<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Productslayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $data;
    public function __construct()
    {
        $this->data = session()->all();
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.productslayout');
    }
}
