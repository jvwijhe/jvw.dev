@if($text)
<section class="my-12 lg:my-24 px-4 sm:px-0">
    <div class="mx-auto container max-w-4xl">
        
        @foreach($text as $content)
        @switch($content->type)
            @case('paragraph')
                <x-dom.text.paragraph :content="$content" />
            @break
            @case('heading1')
                <x-dom.text.heading :content="$content" />
            @break
            @case('heading2')
                <x-dom.text.heading :content="$content" />
            @break
            @case('heading3')
                <x-dom.text.heading :content="$content" />
            @break
            @case('heading4')
            <x-dom.text.heading :content="$content" />
            @break
            @default  
        @endswitch
        @endforeach
    </div>
</section>
@endif