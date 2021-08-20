<x-app-layout>

    <x-slot name="header">
        <div class="container mx-auto flex items-center flex-col md:flex-row justify-between">
            <h2 class="flex items-center font-semibold text-xl text-gray-800 leading-tight">
{{ __('TV Show Overview') }}
</h2>
<livewire:search-dropdown />
</div>

</x-slot>

<!-- tv show Details Section -->
<div class="py-12 container show-info">
    <div class="max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white mx-auto overflow-hidden shadow-sm sm:rounded-lg px-4 py-16 flex flex-col md:flex-row">
            @if($show['poster_path'])
                <img class="p-6 bg-white w-64 lg:w-96" src={{ "https://image.tmdb.org/t/p/w500/".$show['poster_path'] }}  alt="Poster">
            @else
                <img class="p-6 bg-white w-64 lg:w-96" src="https://via.placeholder.com/500x750" alt="poster">
            @endif
            <div class="ml-24 mt-10">
                <h2 class="text-2xl font-semibold">{{ $show['name'] }}</h2>
                <div class="mt-2">
                    <div class="flex items-center text-gray-800 text-sm">
                           <span>
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-300" fill="orange" viewBox="0 0 24 24" stroke="currentColor">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                               </svg>
                           </span>
                        <span class="ml-1">{{ $show['vote_average'] * 10 . "%" }}</span>
                        <span class="mx-2">|</span>
                        <span>
                               @if(isset($show['first_air_date']))
                                {{ \Carbon\Carbon::parse($show['first_air_date'])->format('M d, Y')}}
                            @endif
                           </span>
                        <span class="mx-2">|</span>
                        <span class="">
                               @foreach($show['genres'] as $genre)
                                {{ $genre['name'] }}@if(!$loop->last), @endif
                            @endforeach
                           </span>
                    </div>
                </div>
                <p class="mt-8 text-gray-700">
                    {{ $show['overview'] }}
                </p>

                <div class="mt-10">

                    <div class="flex mt-4">
                        @foreach($show['created_by'] as $crew)
                            @if($loop->index < 2)
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-600">Creator</div>
                                </div>
                            @else
                                @break
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="mt-8">
                    <h4 class="font-semibold text-gray-800 border-b border-gray-200"><a href="#cast">Cast</a></h4>
                    <div class="flex-mt-4">
                        <div class="mr-8">
                            <div class="text-sm text-gray-600"><a href="#cast"> Click here or see below </a></div>
                        </div>
                    </div>
                </div>



                @if(count($show['videos']['results']) > 0)
                    <div class="mt-10">
                        <a href="https://youtube.com/watch?v={{ $show['videos']['results'][0]['key'] }}" class="flex inline-flex items-center bg-yellow-400 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-300 transition ease-in-out duration-200 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="ml-2 text-sm">Play Trailer</span>
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

<!-- End of show Details Section -->

<!-- show Cast Section -->
<div id="cast" class="py-12 container show-info">
    <div class="max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white mx-auto overflow-hidden shadow-sm sm:rounded-lg px-4 py-16 flex flex-col md:flex-row">
            <div class="p-6 bg-white">
                <h2 class="text-3xl pb-4 font-semibold text-gray-600 border-b border-gray-200">Cast</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                    @foreach($show['credits']['cast'] as $cast)
                        @if($loop->index < 5)
                            <div class="mt-8">
                                <a href="#">
                                    @if($cast['profile_path'])
                                        <img src="{{ "https://image.tmdb.org/t/p/w500/".$cast['profile_path'] }}"
                                             class="hover:opacity-75 transition ease-in-out duration-200" alt="Picture">
                                    @else
                                        <img class="hover:opacity-75 transition ease-in-out duration-200" src="https://via.placeholder.com/500x750" alt="picture">
                                    @endif
                                </a>
                                <div class="mt-2">
                                    <div class="flex items-center mt-1">
                                        <span>{{ $cast['name'] }}</span>
                                    </div>
                                    <div class="text-gray-700 text-sm">
                                        {{ $cast['character'] }}
                                    </div>
                                </div>
                            </div>
                        @else
                            @break
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of show Cast Section -->
</x-app-layout>

