<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Webflow', 'UI/UX'],
                'title' => 'Corporate landing page and bloging website buit in webflow.',
                'image' => url('/img/bodhi.jpg'),
                'github' =>  'https://www.bodhi.solar/'
            ],
            [
                'category' => ['E-Commerce', 'Webflow', 'UI/UX'],
                'title' => 'E-commerce website, front-end with webflow and backedn with FoxyCart',
                'image' => url('/img/kind_market.png'),
                'github' => 'https://www.thekindmarket.ca/'
            ],
            [
                'category' => ['ReactJs'],
                'title' => 'Face recoginition from image, web app built with React js',
                'image' => url('/img/image_reco.png'),
                'github' => 'https://akshaysingh02.github.io/imagereco/'
            ],
            [
                'category' => ['UI/UX'],
                'title' => 'UI/UX design for a art gallery based in California USA',
                'image' => url('/img/art_gallery.png'),
                'github' => 'https://www.figma.com/file/RUzc0YQxXn5m33bGgNBvGq/contemproray-art-online?node-id=0%3A1'
            ],
            [
                'category' => ['UI/UX', 'ReactJs'],
                'title' => 'Porfolio website design in process in figma and to be built with ReactJs',
                'image' => url('/img/portfolio_design.png'),
                'github' => 'https://www.figma.com/file/ESsn5vNiU3N3Fbz9BKh3KW/Personal-site-design?node-id=11%3A55'
            ],
            [
                'category' => ['HTML/CSS', 'NodeJs'],
                'title' => 'Tours website built on html/css and Node js',
                'image' => url('/img/tours.png'),
                'github' => 'https://akshaysingh02.github.io/tours/'
            ],
            [
                'category' => ['Webflow', 'UI/UX'],
                'title' => 'Bloging website built with webflow and designed in Figma',
                'image' => url('/img/team_app.png'),
                'github' =>  'https://team-app-f1b2c2.webflow.io/'
            ],
            
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }
    public function render()
    {
        return view('components.home.portfolio');
    }
}