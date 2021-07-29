<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12 w-3/4 flex justify-self-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-max justify-center">
                        <tr class="overflow-ellipsis bg-purple-200 text-purple-800 ">
                            <th class="pt-2 pb-2">Information on</th>
                            <th class="pt-2 pb-2">My personal data</th>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.name') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $user->name }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.age') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ isset($profile_data->age) ? \Carbon\Carbon::parse($profile_data->age)->diff(\Carbon\Carbon::now())->format('%y years') : ''}} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.email') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $user->email }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.address') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->address ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.education') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->education ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.job') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->job ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.description') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->description ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.hobbies') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->hobbies ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.movies') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->movies ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.music') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->music ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.likes') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->likes ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.dislikes') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->dislikes ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.goals') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->goals ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.dreams') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->dreams ?? '' }} </td>
                        </tr>
                        <tr class="overflow-ellipsis border-b border-purple-100 text-center hover:bg-purple-50">
                            <td class="pt-2 pb-2">{{ __('infotable.faq') }}</td>
                            <td class="pt-2 pb-2 text-left"> {{ $profile_data->faq ?? '' }} </td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
