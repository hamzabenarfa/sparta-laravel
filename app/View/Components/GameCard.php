<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GameCard extends Component
{
    public $title;
    public $image;
    public $isNew;

    public function __construct($title, $image, $isNew = false)
    {
        $this->title = $title;
        $this->image = $image;
        $this->isNew = $isNew;
    }

    public function render()
    {
        return view('components.game-card');
    }
}
