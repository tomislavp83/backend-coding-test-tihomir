<?php

namespace App\View\Components;

use App\Models\Casino;
use Illuminate\View\Component;

class CasinoListItem extends Component
{
    /**
     * @var \App\Models\Casino
     */
    public $casino;

    /**
     * CasinoListItem constructor.
     *
     * @param Casino $casino
     */
    public function __construct(Casino $casino)
    {
        $this->casino = $casino;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.casino-list-item');
    }
}
