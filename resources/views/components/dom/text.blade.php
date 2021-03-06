@if($text)
<section class="my-12 lg:my-24 px-4 sm:px-0">
    <div class="mx-auto container max-w-4xl">
        
        @foreach($text as $paragraph)
            <p class="mb-4 text-gray-200">{{$paragraph->text}}</p>
        @endforeach
    </div>
</section>
@endif