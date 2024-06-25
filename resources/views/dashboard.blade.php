<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="w-full flex flex-row justify-between">
            <!-- Left Column -->
            <div class="flex flex-col bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Island 1</h3>
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open"
                                class="text-white bg-gray-800 p-1 rounded-md flex items-center">
                                &#10247;
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="absolute right-0 mt-2 w-32 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Edit</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Delete</a>
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-600 dark:text-gray-400 mt-2">Content for Island 1 goes here.</p>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="flex flex-col bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Island 2</h3>
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open"
                                class="text-white bg-gray-800 p-1 rounded-md flex items-center">
                                &#10247;
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="absolute right-0 mt-2 w-32 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Edit</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Delete</a>
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-600 dark:text-gray-400 mt-2">Content for Island 2 goes here.</p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="flex flex-col bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Island 3</h3>
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open"
                                class="text-white bg-gray-800 p-1 rounded-md flex items-center">
                                &#10247;
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="absolute right-0 mt-2 w-32 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Edit</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Delete</a>
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-600 dark:text-gray-400 mt-2">Content for Island 3 goes here.</p>
                </div>
            </div>
        </div>
        {{-- @foreach ($islands as $island)
            {{ $island->name }}
        @endforeach --}}
    </div>
</x-app-layout>
