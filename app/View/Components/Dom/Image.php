<?php

namespace App\View\Components\Dom;

use Illuminate\View\Component;

class Image extends Component
{
    public $slice;
    public $image;

    public function __construct($slice)
    {
        $this->slice = $slice;
        $this->image = $slice->primary->image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dom.image');
    }
}
