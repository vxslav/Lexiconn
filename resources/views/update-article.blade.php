<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full flex flex-wrap justify-center mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('partials.articles.update-table')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
