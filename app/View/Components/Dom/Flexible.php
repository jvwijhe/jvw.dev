<?php

namespace App\View\Components\Dom;

use Illuminate\View\Component;

class Flexible extends Component
{

    public $content;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dom.flexible');
    }
}
