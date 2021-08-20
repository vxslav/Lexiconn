 <form action="{{ route('article.store') }} " method="post" class="bg-white shadow-xl rounded px-8 pt-6 pb-8 mt-4 mb-4">

                    @csrf

            <div class="mb-4">
                <label for="heading" class="block text-gray-700 text-sm font-bold mb-2">Article Heading</label>
                <input value="{{ Auth::user()->article->heading ?? '' }}"
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
                <textarea value="{{ Auth::user()->article->text ?? '' }}"
                          id="text"
                          name="text"
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea> 
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

           
                <button type="submit" title="{{ __('infotable.button_create') }}" class="ml-5 bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline pr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    Create Article
                </button>

           {{--  @else
                <button type="submit" title="{{ __('infotable.button_edit') }}" class="ml-5 bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    Edit profile
                </button>
            @endif
 --}}
           {{--  @if(isset(Auth::user()->profile->id))
                <a href="/update-profile/delete/{{ Auth::user()->profile->id ?? ''}}" title="{{ __('infotable.button_delete') }}" class="ml-5 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                Delete profile
                </a>
            @endif
                <a href="/delete-user/{{ Auth::user()->id }}" title="{{ __('infotable.button_destroy') }}" class="ml-5 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                Delete Account
                </a> --}}

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

