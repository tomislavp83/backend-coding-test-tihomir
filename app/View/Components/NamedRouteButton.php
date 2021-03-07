<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NamedRouteButton extends Component
{
    /**
     * Named route
     *
     * @var string
     */
    public $routeName;

    /**
     * Button text
     *
     * @var string
     */
    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $routeName)
    {
       $this->text = $text;
       $this->routeName = $routeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.named-route-button');
    }
}
