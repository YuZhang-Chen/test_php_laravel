<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Independent Service Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" x-data="{ currentMsg: '{{ $msg1 }}' }">
                    <div class="max-w-3xl mx-auto text-center">
                        <h3 class="text-2xl font-bold mb-6">Service Message Toggler</h3>
                        
                        <div class="mb-8 p-10 bg-gray-50 dark:bg-gray-900 rounded-2xl border-2 border-dashed border-gray-300 dark:border-gray-700">
                            <p class="text-3xl font-black italic text-indigo-600 dark:text-indigo-400 transition-all duration-300" x-text="currentMsg"></p>
                        </div>

                        <div class="flex flex-wrap gap-4 justify-center">
                            <button @click="currentMsg = '{{ $msg1 }}'" 
                                    class="px-8 py-3 bg-indigo-600 font-bold rounded-xl shadow-lg hover:bg-indigo-700 transition active:scale-95">
                                Load Message 1
                            </button>
                            <button @click="currentMsg = '{{ $msg2 }}'" 
                                    class="px-8 py-3 bg-emerald-600 font-bold rounded-xl shadow-lg hover:bg-emerald-700 transition active:scale-95">
                                Load Message 2
                            </button>
                        </div>

                        <p class="mt-8 text-sm text-gray-500">
                            This page demonstrates zero-config dependency injection of App\Service\Service.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
