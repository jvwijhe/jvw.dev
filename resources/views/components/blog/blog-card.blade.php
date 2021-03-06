<div class="relative origin-center transition-all h-96 lg:h-128 duration-500 ease-in-out transform hover:-translate-y-2 shadow-md">
    <div class="absolute bottom-0 left-0 m-4">
        <span class="block font-bold text-white rounded p-1 text-sm">
            {{ date('d-m-Y ', strtotime($date)) }}</span>
        <a class="font-medium text-1xl text-white " href="{{$permalink}}">{{$title}}</a>

    </div>

    <img src="{{$thumbnail->url}}"
    class="object-center object-cover h-full w-full" 
    alt="{{$thumbnail->alt}}"
  />

  <a href="{{$permalink}}" class="absolute top-0 left-0 h-full w-full z-0"></a>

</div>