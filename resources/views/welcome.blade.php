<x-guest-layout>
    
<section class="py-24 px-4 sm:px-0">
    <div class="m-auto max-w-lg flex items-center ">
        <div class="text-center m-auto">
            <div class="text-center m-auto">
                <img src="https://avatars.githubusercontent.com/u/31101466?s=460&u=f941264a517f61521f72dae2383bcf2e24c4099c&v=4" 
                class="w-24 h-24 rounded-full mx-auto"
                />
            </div>

            <div class="my-6">
                {{-- <h1 class="text-5xl font-heading">Jens van Wijhe</h1> --}}
                <x-dom.title class="text-5xl font-heading" :content="$document->data->title" />
                <div class="my-4">
                <x-dom.rich-text class="my-2" :content="$document->data->text" />

                <div class="my-6">
                    <p class="my-2">👔 Founder of <a href="https://www.beterbekend.nl" class="text-blue-500 font-medium hover:underline">Beter Bekend</a></p>
                    <p class="my-2">📍 The Netherlands.</p>
                </div>

                <ul class="my-4 text-center justify-center items-center flex">
                    <li class="flex">
                        <a href="https://www.twitter.com/jensvanwijhe" class="m-auto flex text-center hover:underline">
                            <span class="text-blue-500 h-5 w-5"><x-twitter-icon></x-twitter-icon></span>
                        </a>
                    </li>

                    <li class="flex ml-4">
                        <a href="https://www.twitter.com/jensvanwijhe" class="m-auto flex text-center hover:underline">
                            <span class="text-blue-500 h-5 w-5"><x-linkedin-icon></x-linkedin-icon></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

        <section class="my-12 lg:my-24">
            <div class="container max-w-lg mx-auto mb-6 text-left m-auto">
                <h2 class="text-3xl font-heading">About me 📚</h2>
            </div>
            <div class="container max-w-lg mx-auto mb-6">
                    <x-blog.blog-card  :blog="$blog"/>
            </div> 

            <div class="container max-w-lg mx-auto mb-6 text-left m-auto flex justify-start">
                <a href="{{route('blogs.index')}}" class="bg-gray-800 p-6 rounded text-gray-100 flex items-center">
                    <span class="text-1xl font-heading" >Read more</span>
                    <span class="text-gray-500 ml-2">
                        <svg class="w-6 h-6" fill="" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </span>
                </a>
            </div>
    
        </section>

<x-dom.flexible :content="$document->data->body" />
  
</x-guest-layout>
