
    <table class="w-max">
        <tr class="bg-purple-200 text-purple-800 ">
            <th class="pt-2 pb-2">{{ __('infotable.name') }}</th>
            <th class="pt-2 pb-2">{{ __('infotable.age') }}</th>
            <th class="pt-2 pb-2">{{ __('infotable.description') }}</th>
            <th class="pt-2 pb-2">{{ __('infotable.job') }}</th>
            <th class="pt-2 pb-2"> View Profile</th>
        </tr>

        @foreach ($users as $user)
            <tr class="border-b border-purple-100 text-center hover:bg-purple-50">
                <td class="p-4 text-gray-600 hover:text-indigo-600">{{ $user->name ?? '' }}</td>
                <td class="p-4 text-gray-600 hover:text-indigo-600">{{ isset($user->profile->age) ? \Carbon\Carbon::parse($user->profile->age)->diff(\Carbon\Carbon::now())->format('%y years') : ''}}</td>
                <td class="p-4 text-gray-600 hover:text-indigo-600">{{ $user->profile->description ?? ''}}</td>
                <td class="p-4 text-gray-600 hover:text-indigo-600">{{ $user->profile->job ?? ''}}</td>
                <td class="p-4">
                    <button class="bg-purple-300 hover:bg-purple-500 text-white font-bold py-2 px-3 rounded">
                        View Profile
                    </button>
                </td>
            </tr>
        @endforeach

    </table>


