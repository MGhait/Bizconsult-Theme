<?php

namespace App\View\Components;

use Closure;
use App\Models\About;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontAboutComponent extends Component
{
    public $abouts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->abouts= About::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-about-component');
    }
}
