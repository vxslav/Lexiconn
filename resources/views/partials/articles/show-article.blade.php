<div class="py-12 w-full flex justify-self-center">

        <div class="max-w-7xl container mx-auto sm:px-6 lg:px-8">

    @if(Auth::user()->id == $article->user_id) 

                <button class="ml-5 bg-blue-300 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <a href="{{ route('article.edit', $article->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>Edit Article
                    </a>
                </button>
                <button class="ml-5 bg-red-300 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <a href="{{ route('article.delete', $article->id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>Delete Article
                </a>
                </button>

        @endif


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h2 class="w-max justify-center font-bold py-5 px-12 "> {{ $article->heading }} </h2>
                        
                    <p class="py-5 pl-4 text-justifyleading-relaxed">{{ $article->text }}</p>

                    <footer class="m-4 italic">{{ $article->author }}</footer>

                </div>
            </div>
        </div>
    </div>