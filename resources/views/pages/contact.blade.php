<x-guest-layout>
    <section class="my-12 lg:my-24 px-4 lg:px-0">
        <div class="m-auto max-w-lg">
            <div class="text-center mx-auto">
                <x-dom.title class="text-5xl font-heading" :content="$page->data->title" />
                    <x-dom.rich-text class="my-4" :content="$page->data->text" />

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
    </section> 

    <x-dom.flexible :content="$page->data->body" />
    
    </x-guest-layout>
    