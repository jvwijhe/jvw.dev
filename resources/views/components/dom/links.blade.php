<section class=" px-4 sm:px-0 border-gray-100">
    <div class="mx-auto max-w-lg">
        <x-dom.title class="text-3xl font-heading" :content="$title" />
    </div>
    <div class="my-12 m-auto max-w-lg flex items-center ">
        <ul class="w-full">
            @foreach($links as $link)
                <li class="mb-6 w-full">
                    <a href="{{$link->link->url}}" class="bg-gray-800 p-6 rounded text-gray-100 flex justify-between">
                        <x-dom.span class="text-1xl font-heading" :content="$link->link_label" />
                        <span class="text-gray-500">
                            <svg class="w-6 h-6" fill="" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>