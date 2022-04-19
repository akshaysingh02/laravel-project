<?php

namespace App\View\Components;

use Illuminate\View\Component;
use function view;

class Button extends Component
{
    
    public function __construct(public string $variant = 'primary')
    {
        //
    }

    
    public function render()
    {
        return view('components.button');
    }
}
