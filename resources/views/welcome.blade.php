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
                <h1 class="text-5xl font-heading">Jens van Wijhe</h1>
                <div class="my-4">
                    <p class="my-1">🎯 E-commerce and web development.</p>
                    <p class="my-1">👔 Working @ <a href="https://www.beterbekend.nl" class="text-blue-500 font-medium hover:underline">Beter Bekend</a></p>
                    <p class="my-1">📍 The Netherlands.</p>
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

    <section class="py-24 px-4 sm:px-0 border-gray-100 border-t border-dashed">
        <div class="m-auto max-w-lg flex items-center ">
            <ul class="w-full">
                @foreach($links as $label => $link)
                    <li class="mb-6 w-full">
                        <a href="{{$link}}" class="bg-gray-800 p-6 rounded text-gray-100 flex justify-between">
                            <span>{{$label}}</span>
                            <span class="text-gray-500">
                            <svg class="w-6 h-6" fill="" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</x-guest-layout>
