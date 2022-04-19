<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems = [];
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'About', 'href' => '#about'],
            ['label' => 'Projects', 'href' => '#portfolio'],
            ['label' => 'Contact', 'href' => '#contact'],
        ];
    }
    public function render()
    {
        return view('layout.navbar');
    }
}
