<?php

namespace App\View\Components\Dom;

use Illuminate\View\Component;

class RichText extends Component
{
    public $content;
    public $text;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($content)
    {
        $this->content = collect($content)->first();

        $this->text = $this->format();
    }

    public function format(){
        return collect($this->content)->get('text');
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dom.rich-text');
    }
}
