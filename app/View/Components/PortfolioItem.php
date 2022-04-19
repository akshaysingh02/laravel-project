<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PortfolioItem extends Component
{
    
    public function __construct(public string $title, public array $categories, public string $image, public string $github)
    {
    }


   
    public function render()
    {
        return view('components.portfolio-item');
    }
}
