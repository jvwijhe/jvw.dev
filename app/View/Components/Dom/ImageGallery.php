<?php

namespace App\View\Components\Dom;

use Illuminate\View\Component;

class ImageGallery extends Component
{
    public $slice;
    public $images;
    public $title;

    public function __construct($slice)
    {
        $this->slice = $slice;
        $this->images = $slice->items;
        $this->title = collect($slice->primary->name_of_the_gallery)->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dom.image-gallery');
    }
}
