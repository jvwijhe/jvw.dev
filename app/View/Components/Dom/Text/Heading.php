<?php

namespace App\View\Components\Dom\Text;

use Illuminate\View\Component;
use Illuminate\Support\Str;



class Heading extends Component
{
    public $content;
    public $heading;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($content)
    {
        $this->content = $content;

        $this->heading = Str::of($content->type)->replace('heading', 'h');

    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dom.text.heading');
    }
}
