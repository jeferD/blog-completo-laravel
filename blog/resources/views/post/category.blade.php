<x-app-layout>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
          <h2 class="text-2xl font-bold tracking-tight text-gray-900">Categorias: {{$category->name}}</h2>
         
          <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($posts as $post)
                <div class="group relative">
                    <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                        <img src="{{$post->image->url}}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-lg text-gray-700">
                            <a href="{{route('posts.show', $post)}}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{$post->name}}
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">{{$post->extract}}</p>
                    </div>
                    {{-- @foreach($posts->tags as $tag)
                        <p class="text-sm font-medium text-gray-900">{{$tags->name}}</p>
                    @endforeach --}}
                    {{-- <p class="text-sm font-medium text-gray-900">$35</p> --}}
                    </div>
                </div>
            @endforeach
            
            <!-- More products... -->
          </div>
        </div>
    </div>
    <div class="mt-4 pb-4 pr-5 pl-5">
        {{$posts->links()}}
    </div>
</x-app-layout>