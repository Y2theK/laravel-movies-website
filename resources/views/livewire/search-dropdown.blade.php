<div class="relative mt-3 md:mt-0" x-data="{isOpen : true}" @click.away="isOpen = false">
    <input type="text" name=""
        class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 text-sm focus:outline-none focus:shadow-outline"
        id="" placeholder="Search....." wire:model.debounce.500ms="search">
    <div class="absolute top-0"> 
        <svg class=" w-4 mt-2 ml-2 fill-current text-gray-500" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </div>
  
    
    <div wire:loading  class="spinner top-0 right-0 mr-4 mt-3"></div>
    @if (strlen($search) > 2)
    <div class="absoute text-sm bg-gray-800 rounded w-64 mt-4" x-show="isOpen">
        <ul>
            @if ($searchResults->count() > 0)
            @foreach ($searchResults as $result)
            <li class="border-b border-gray-700">
            <a href="{{ route('movies.show',$result['id']) }}" class=" hover:bg-gray-700 px-3 py-3 flex items-center">
               @if ($result['poster_path'])
               <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">    
               @else    
                {{-- <img src="https://via.placeholder.com/50x75" alt="" class="w-8"> --}}
               @endif
                    <span class="ml-3">{{ $result['title'] }}</span>
            </a>
            </li>    
            @endforeach
            @else
            <div class="px-3 py-3">No Results for "{{ $search }}"</div>
            @endif
        </ul>
    </div>
    @endif
</div>