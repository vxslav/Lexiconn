 <div class="relative mt-3 md:mt-0" x-data="{ isOpen:true }" @click.away="isOpen = false">
     <input wire:model="search"
            type="text"
            class="rounded-full w-64 px-4 py-1 pl-9 bg-purple-50 border-purple-200 text-sm"
            placeholder="Search"
            @focus="isOpen = true"
            @keydown.escape.window="isOpen = false"
     >
     <div class="absolute top-0">
         <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mt-2 ml-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
         </svg>
     </div>
     <div wire:loading class="spinner top-0 right-0 mt-4 mr-4"></div>

     @if(strlen($search) > 2)
     <div class="z-50 absolute bg-purple-200 text-sm rounded w-64 mt-5" x-show="isOpen" x-transition.duration.500ms>
         @if($searchResults->count() > 0)
         <ul>
             @foreach($searchResults as $result)
             <li class="border-b border-purple-50 text-gray-600">
                     <a href="{{ isset($result['title']) ? route('movies.show', $result['id']) : route('tv.show', $result['id'])}}" class="block hover:bg-purple-400 hover:text-purple-50 px-3 py-3 transition ease-in-out duration-200 flex items-center">
                         @if(isset($result['poster_path']))
                         <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" class="w-8" alt="poster">
                     @else
                         <img src="https://via.placeholder.com/50x75" class="w-8" alt="Poster">
                   @endif
                     <span class="ml-4">{{ $result['title'] ?? $result['name'] }}</span>
                 </a>
             </li>
             @endforeach
         </ul>
         @else
         <div class="px-3 py-3">No results for "{{ $search }}"</div>
             @endif
     </div>
         @endif

 </div>

