
    <table class="w-max">
        <tr class="bg-purple-200 text-purple-800 ">
            <th class="pt-2 pb-2">{{ __('infotable.heading') }}</th>
            <th class="pt-2 pb-2">{{ __('infotable.author') }}</th>
            <th class="pt-2 pb-2">{{ __('infotable.date') }}</th>
            <th class="pt-2 pb-2"> Read Article</th>
        </tr>

        @foreach ($articles as $article)
            <tr class="border-b border-purple-100 text-center hover:bg-purple-50">
                <td class="p-4 text-gray-600 hover:text-indigo-600">{{ $article->heading ?? '' }}</td>
                <td class="p-4 text-gray-600 hover:text-indigo-600">{{ $article->author ??''}}</td>
                <td class="p-4 text-gray-600 hover:text-indigo-600">{{ $article->created_at ?? ''}}</td>
                <td>
                    <button class="bg-purple-300 hover:bg-purple-500 text-white font-bold py-2 px-3 rounded">
                        <a href="{{ route('article.show', $article->id) }}">Read Article</a>
                    </button>
                </td>
            </tr>
        @endforeach

    </table>

