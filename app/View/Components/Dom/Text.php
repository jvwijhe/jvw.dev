<?php

namespace App\View\Components\Dom;

use Illuminate\View\Component;

class Text extends Component
{
    public $slice;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slice)
    {
        $this->slice = $slice;
        $this->text = $slice->primary->text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dom.text');
    }
}
