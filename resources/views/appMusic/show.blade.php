<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Podcast 詳情') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="w-full md:w-2/3">
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">
                            {{ $podcast['attributes']['name'] }}
                        </h1>
                        <p class="text-xl text-indigo-600 font-medium mb-4">
                            {{ $podcast['attributes']['artistName'] }}
                        </p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach($podcast['attributes']['genreNames'] as $genre)
                                <span class="px-3 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">
                                    {{ $genre }}
                                </span>
                            @endforeach
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">
                                {{ $podcast['attributes']['releaseDate'] }}
                            </span>
                        </div>

                        <div class="prose prose-indigo max-w-none mb-8">
                            <h3 class="text-lg font-semibold mb-2">關於此節目</h3>
                            <p class="text-gray-600 leading-relaxed">
                                {{ $podcast['attributes']['description']['standard'] }}
                            </p>
                        </div>

                        <a href="{{ $podcast['attributes']['url'] }}" 
                           target="_blank" 
                           class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                            在 Apple Podcasts 上聽
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>