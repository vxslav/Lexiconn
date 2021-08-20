<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Browse Articles') }}
        </h2>
    </x-slot>

        @if(session('message'))
                <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 mt-8">
                    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-300">
                    <span class="text-xl inline-block mr-5 align-middle">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                     </span>
                        <span class="inline-block align-middle mr-8">
                         <b class="capitalize">holy smokes!</b> {{ session('message') }}
                    </span>
                        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
                            <span>×</span>
                        </button>
                    </div>
                </div>
                <script>
                    function closeAlert(event){
                        let element = event.target;
                        while(element.nodeName !== "BUTTON"){
                            element = element.parentNode;
                        }
                        element.parentNode.parentNode.removeChild(element.parentNode);
                    }
                </script>
        @endif

    <div class="py-12">
        <div class="w-full flex flex-wrap justify-center mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('partials.articles.info')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
