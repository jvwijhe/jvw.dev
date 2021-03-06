<x-guest-layout>
    
    <section class="my-12 lg:my-24 px-4 lg:px-0">
        <div class="m-auto max-w-lg flex items-center ">
            <div class="text-center m-auto">
                <x-dom.title class="text-5xl font-heading" :content="$blog->data->title" />
                <div class="mt-3 text-xm text-gray-500 flex items-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="ml-2">Written on: {{ date('d-m-Y ', strtotime($blog->first_publication_date)) }}</span>
                </div>
            </div>
        </div>
    </section>

    @if($blog->data->body)
    <x-dom.flexible :content="$blog->data->body" />
    @endif
    {{-- <section class="my-12 lg:my-24">
        <div class="container max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-16">
            @foreach($blogs as $blog)
                <x-blog.blog-card  :blog="$blog"/>
            @endforeach
        </div>  

        <div class="mt-16 container max-w-7xl mx-auto flex justify-end">

            
            <a class="bg-gray-800 p-6 rounded text-gray-100 flex justify-between">
                <span class="text-1xl font-heading">Next page</span>
                <span class="ml-2 text-gray-500">
                    <svg class="w-6 h-6" fill="" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </span>
            </a>

    </section> --}}
</x-guest-layout>
    