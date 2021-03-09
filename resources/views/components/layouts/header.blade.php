<header class="py-4 lg:py-12 px-4 lg:px-0">
    <div class="mx-auto container max-w-7xl text-white flex justify-between">
        <a href="{{route('home')}}">
            <span class="text-white font-bold">jvw<span>
        </a>

        <ul class="flex">
            <li>
            <a href="{{route('blogs.index')}}"  class="transition-all duration-500 ease-in-out transform hover:text-blue-500">
                <span>Blog</span>
            </a>
            </li>
            <li class="ml-8">
            <a href="{{route('pages.contact')}}" class="transition-all duration-500 ease-in-out transform hover:text-blue-500">
                <span>Contact</span>
            </a>
            </li>
        </ul>

        {{-- <button class="focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
        </button> --}}
    </div>
</header>