@if($image)
<section class="my-12 lg:my-24 px-4 sm:px-0">
    <div class="mx-auto container max-w-7xl">
            <img 
            src="{{$image->url}}" 
            alt="{{$image->alt}}"
            class="object-cover object-center w-full h-72 lg:h-auto" />
    </div>
</section>
@endif