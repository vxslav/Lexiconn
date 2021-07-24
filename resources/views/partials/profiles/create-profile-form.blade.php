        @if(is_null(Auth::user()->profile))
            <form action="{{ route('create') }} " method="post" class="bg-white shadow-xl rounded px-8 pt-6 pb-8 mt-4 mb-4">
        @else
            <form action="{{ route('save-updates', Auth::user()->profile->id) }} " method="post" class="bg-white shadow-xl rounded px-8 pt-6 pb-8 mt-4 mb-4">
        @endif
                    @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                <input value="{{ Auth::user()->name }}"
                       type="text"
                       id="name"
                       name="name"
                       readonly disabled
                       class="cursor-default shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Date of birth</label>
                <input value="{{ Auth::user()->profile->age ?? '' }}"
                       type="date"
                       id="age"
                       name="age"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if($errors->has('age'))
                    <span class="block text-red-600 sm:border-b border-red-500 hover:border-red-700 mt-3 pl-3">
                        {{ $errors->first('age') }}
                    </span>
                @endif
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                <input type="email"
                       id="email"
                       name="email"
                       value="{{ Auth::user()->email }}"
                       readonly disabled
                       class="cursor-default shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Home Address</label>
                <input value="{{ Auth::user()->profile->address ?? '' }}"
                       type="text"
                       id="address"
                       name="address"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if($errors->has('address'))
                    <span class="block text-red-600 sm:border-b border-red-500 hover:border-red-700 mt-3 pl-3">
                                    {{ $errors->first('address') }}
                                </span>
                @endif
            </div>

            <div class="mb-4">
                <label for="edu" class="block text-gray-700 text-sm font-bold mb-2">Education</label>
                <input value="{{ Auth::user()->profile->education ?? '' }}"
                       type="text"
                       id="edu"
                       name="education"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if($errors->has('education'))
                    <span class="block text-red-600 sm:border-b border-red-500 hover:border-red-700 mt-3 pl-3">
                                    {{ $errors->first('education') }}
                                </span>
                @endif
            </div>

            <div class="mb-4">
                <label for="job" class="block text-gray-700 text-sm font-bold mb-2">Current occupation</label>
                <input value="{{ Auth::user()->profile->job ?? '' }}"
                       type="text"
                       id="job"
                       name="job"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if($errors->has('job'))
                    <span class="block text-red-600 sm:border-b border-red-500 hover:border-red-700 mt-3 pl-3">
                                    {{ $errors->first('job') }}
                                </span>
                @endif
            </div>

            <div class="mb-4">
                <label for="descr" class="block text-gray-700 text-sm font-bold mb-2">Tell me about yourself...</label>
                <input value="{{ Auth::user()->profile->description ?? '' }}"
                       type="text"
                       id="descr"
                       name="description"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if($errors->has('description'))
                    <span class="block text-red-600 sm:border-b border-red-500 hover:border-red-700 mt-3 pl-3">
                                    {{ $errors->first('description') }}
                                </span>
                @endif
            </div>

            <div class="mb-4">
                <label for="hobbies" class="block text-gray-700 text-sm font-bold mb-2">What about your hobbies?</label>
                <input value="{{ Auth::user()->profile->hobbies ?? '' }}"
                       type="text"
                       id="hobbies"
                       name="hobbies"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="movies" class="block text-gray-700 text-sm font-bold mb-2">What are some of your favorite movies?</label>
                <input value="{{ Auth::user()->profile->movies ?? '' }}"
                       type="text"
                       name="movies"
                       id="movies"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="music" class="block text-gray-700 text-sm font-bold mb-2">What types of music do you enjoy?</label>
                <input value="{{ Auth::user()->profile->music ?? '' }}"
                       type="text"
                       name="music"
                       id="music" cols="50" rows="10"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="likes" class="block text-gray-700 text-sm font-bold mb-2">What do you like in general?</label>
                <input value="{{ Auth::user()->profile->likes ?? '' }}"
                       type="text"
                       id="likes"
                       name="likes"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="dislikes" class="block text-gray-700 text-sm font-bold mb-2">And what are your dislikes?</label>
                <input value="{{ Auth::user()->profile->dislikes ?? '' }}"
                       type="text"
                       id="dislikes"
                       name="dislikes"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="goals" class="block text-gray-700 text-sm font-bold mb-2">What kind of goals do you have in life?</label>
                <input value="{{ Auth::user()->profile->goals ?? '' }}"
                       type="text"
                       id="goals"
                       name="goals"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="dreams" class="block text-gray-700 text-sm font-bold mb-2">Tell me about your dreams...</label>
                <input value="{{ Auth::user()->profile->dreams ?? '' }}"
                       type="text"
                       id="dreams"
                       name="dreams"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="faq" class="block text-gray-700 text-sm font-bold mb-2">What do people usually want to know about you and ask you the most?</label>
                <input value="{{ Auth::user()->profile->faq ?? '' }}"
                       type="text"
                       name="faq"
                       id="faq"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            @if(is_null(Auth::user()->profile))
                <button type="submit" title="{{ __('infotable.button_create') }}" class="ml-5 bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline pr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    Create Profile
                </button>

            @else
                <button type="submit" title="{{ __('infotable.button_edit') }}" class="ml-5 bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    Edit profile
                </button>
            @endif

            @if(isset(Auth::user()->profile->id))
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
                </a>

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

