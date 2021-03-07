<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class CasinoList extends Component
{
    /**
     * Casino collection.
     *
     * @var Illuminate\Database\Eloquent\Collection;
     */
    public $casinos;

    /**
     * CasinoList constructor.
     *
     * @param Collection $casinos
     */
    public function __construct(Collection $casinos)
    {
        $this->casinos = $casinos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.casino-list');
    }
}
