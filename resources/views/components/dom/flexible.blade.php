    @foreach($content as $slice)
            @switch($slice->slice_type)
                @case('title')
                    <x-dom.title :slice="$slice" />
                    @break
                @case('rich-text')
                    <x-dom.rich-text :slice="$slice" />
                    @break
                @case('text')
                    <x-dom.text :slice="$slice" />
                    @break
                @case('links')
                        <x-dom.links :slice="$slice" />
                    @break
                
                @case('image')
                    <x-dom.image :slice="$slice" />
                @break
                @case('image_gallery')
                    <x-dom.image-gallery :slice="$slice" />
                @break
                @default  
            @endswitch
    @endforeach