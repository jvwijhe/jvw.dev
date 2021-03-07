@if($images)
<section class="my-12 lg:my-24 px-4 lg:px-0">
    @if($title->text != "")
    <div class="mx-auto container max-w-7xl mb-4">
        <x-dom.text.heading :content="$title" />
    </div>
    @endif
    <div class="mx-auto container max-w-7xl grid grid-cols-2 gap-4 lg:gap-16">  
        @foreach($images as $image)
            <img src="{{$image->gallery_image->url}}" class="object-cover object-center" />
        @endforeach
    </div>
</section>
@endif