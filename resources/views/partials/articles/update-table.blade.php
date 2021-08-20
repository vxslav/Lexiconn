 <form action="{{ route('article.update', $article->id) }} " method="post" class="bg-white shadow-xl rounded px-8 pt-6 pb-8 mt-4 mb-4">

                    @csrf

            <div class="mb-4">
                <label for="heading" class="block text-gray-700 text-sm font-bold mb-2">Article Heading</label>
                <input value="{{ $article->heading ?? '' }}"
                       type="text"
                       id="heading"
                       name="heading"
                       class="cursor-default shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if($errors->has('heading'))
                    <span class="block text-red-600 sm:border-b border-red-500 hover:border-red-700 mt-3 pl-3">
                        {{ $errors->first('heading') }}
                    </span>
                @endif
            </div>

            <div class="mb-4">
                <label for="text" class="block text-gray-700 text-sm font-bold mb-2">Article Content</label>
                <textarea id="text"
                          name="text"
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $article->text ?? '' }}
                </textarea> 
                @if($errors->has('text'))
                    <span class="block text-red-600 sm:border-b border-red-500 hover:border-red-700 mt-3 pl-3">
                        {{ $errors->first('text') }}
                    </span>
                @endif
            </div>

            <div class="mb-4">
                <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author</label>
                <input type="text"
                       id="author"
                       name="author"
                       value="{{ Auth::user()->name }}"
                       readonly disabled
                       class="cursor-default shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

                <button type="submit" title="{{ __('infotable.button_edit') }}" class="ml-5 bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    Update Article
                </button>


                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
 </form>

