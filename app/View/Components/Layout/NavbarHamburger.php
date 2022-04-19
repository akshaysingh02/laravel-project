<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class NavbarHamburger extends Component
{
    public function __construct()
    {
        //
    }
    public function render()
    {
        return view('layout.navbar-hamburger');
    }
}
