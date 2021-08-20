<x-app-layout>

    <x-slot name="header">
        <div class="container mx-auto flex items-center flex-col md:flex-row justify-between">
            <h2 class="flex items-center font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Movie List') }}
            </h2>
            <ul class="flex items-center flex-col md:flex-row">
                <li class="md:ml-6 mt-3 md:mt-0 text-gray-400 hover:text-gray-600 text-sm"><a href="#top-rated">#Top Rated Movies</a></li>
                <li class="md:ml-6 mt-3 md:mt-0 text-gray-400 hover:text-gray-600 text-sm"><a href="#popular">#Popular Now</a></li>
            </ul>
            <livewire:search-dropdown />
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="top-rated-movies" id="top-rated">
                        <h3 class="uppercase tracking-wider text-purple-500 text-lg font-semibold">Top Rated Movies</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">

                            @foreach($topRatedMovies as $movie)

                                <div class="mt-8">
                                    <a href="{{ route('movies.show', $movie['id']) }}">
                                        <img src="{{ "https://image.tmdb.org/t/p/w500/".$movie['poster_path'] }}"
                                             class="hover:opacity-75 transition ease-in-out duration-200" alt="poster">
                                    </a>
                                    <div class="mt-2">
                                        <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-purple-500">{{ $movie['title'] }}</a>
                                        <div class="flex items-center text-gray-800 text-sm mt-1">
                                            <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-300" fill="orange" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            </span>
                                            <span class="ml-1">{{ $movie['vote_average'] * 10 .  '%' }}</span>
                                            <span class="mx-2">|</span>
                                            <span>@if(isset($movie['release_date']))
                                                    {{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}
                                                  @endif
                                            </span>
                                        </div>
                                        <div class="text-gray-800 text-sm">
                                            @foreach($movie['genre_ids'] as $genre)
                                                {{ $genres->get($genre) }}@if(!$loop->last), @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="popular-movies" id="popular">
                        <h3 class="uppercase tracking-wider text-purple-500 text-lg font-semibold">Popular</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">

                            @foreach($popularMovies as $movie)

                            <div class="mt-8">
                                <a href="{{ route('movies.show', $movie['id']) }}">
                                    <img src="{{ "https://image.tmdb.org/t/p/w500/".$movie['poster_path'] }}"
                                         class="hover:opacity-75 transition ease-in-out duration-200" alt="Poster">
                                </a>
                                <div class="mt-2">
                                    <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-purple-500">{{ $movie['title'] }}</a>
                                    <div class="flex items-center text-gray-800 text-sm mt-1">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-300" fill="orange" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        </span>
                                        <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
                                        <span class="mx-2">|</span>
                                        <span>@if(isset($movie['release_date']))
                                          {{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="text-gray-800 text-sm">
                                        @foreach($movie['genre_ids'] as $genre)
                                            {{ $genres->get($genre) }}@if(!$loop->last), @endif
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
