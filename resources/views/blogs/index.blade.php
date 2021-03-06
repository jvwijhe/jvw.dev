<x-guest-layout>
    
    <section class="my-12 lg:my-24 px-4 lg:px-0">
        <div class="m-auto max-w-lg flex items-center ">
            <div class="text-center m-auto">
                <h1 class="text-5xl font-heading">Blog</h1>
                <p class="my-4 text-gray-200">I blog about web development.</p>
            </div>
        </div>
    </section>

    <section class="my-12 lg:my-24">
        <div class="container max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-16">
            @foreach($blogs as $blog)
                <x-blog.blog-card  :blog="$blog"/>
            @endforeach
        </div>  
    </section>
</x-guest-layout>
    