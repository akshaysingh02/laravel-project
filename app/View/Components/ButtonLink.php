<?php

namespace App\View\Components;

use Illuminate\View\Component;
use function view;

class ButtonLink extends Component
{
    
    public function __construct(public string $href, public string $variant = 'primary', public string $target = '_self')
    {
        //
    }

    
    public function render()
    {
        return view('components.button-link');
    }
}
