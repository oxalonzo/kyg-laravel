<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class headerGuest extends Component
{

    public $picture;
    public $section;


    public function __construct($picture, $section)
    {
        $this->picture = $picture;
        $this->section = $section;
      
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-guest');
    }
}
