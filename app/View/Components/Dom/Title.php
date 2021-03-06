<?php

namespace App\View\Components\Dom;

use Illuminate\View\Component;
use Illuminate\Support\Str;


class Title extends Component
{

    /**
     * message.
     *
     * @var string
     */
    public $content;
    public $heading;
    public $title;

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

        $this->title = $this->format();
        $this->heading = $this->heading();
    }

    public function format(){
        return collect($this->content)->get('text');
    }

    public function heading(){
        $type =  collect($this->content)->get('type');
        $replaced = Str::of($type)->replace('heading', 'h');

        return $replaced;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dom.title');
    }
}
