<?php

namespace App\View\Components\Dom;

use Illuminate\View\Component;

class Links extends Component
{
    public $slice;
    public $title;
    public $links;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slice)
    {
        $this->slice = $slice;
        // $this->content = collect($content->attributes)->get('content');
        $this->title = $slice->primary->link_title;
        $this->links = $this->links();
    }

    public function links(){
        $items = $this->slice->items;
        return  $items;
        // $items->map(function($item) {
        //     return $item->link->url;
        // });
        // // $links = $this->items;
        // dd($this->slice->items);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dom.links');
    }
}
