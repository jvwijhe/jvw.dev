<?php

namespace App\View\Components\Blog;

use Illuminate\View\Component;

class BlogCard extends Component
{
    public $blog;
    public $title;
    public $date;
    public $permalink;
    public $thumbnail;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($blog)
    {
        $this->date = $blog->first_publication_date;
        $this->title = collect($blog->data->title)->first()->text;
        $this->permalink = route('blogs.show', $blog->uid);
        $this->thumbnail = $blog->data->thumbnail;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.blog.blog-card');
    }
}
