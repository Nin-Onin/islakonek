<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Edit Island') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Edit Island Information') }}
        </p>
    </header>

    <form method="post" action="{{ route('island.update', ['island' => $island]) }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" value="{{ $island->name }}" placeholder="Enter Name"
                class="mt-1 block w-full" required autofocus autocomplete="off" />
        </div>

        <div class="grid grid-col gap-4">
            <div class="flex flex-row">
                <div class="flex flex-row w-full">
                    <div class="w-full">
                        <x-input-label for="area" :value="__('Area')" class="w-20" />
                        <x-text-input id="area" name="area" type="text" value="{{ $island->area }}"
                            placeholder="Enter area" class="mt-1 block w-full" required autofocus autocomplete="off" />
                    </div>

                    <div class="w-full">
                        <x-input-label for="total_population" :value="__('Total Population')" />
                        <x-text-input id="total_population" name="total_population" type="text"
                            value="{{ $island->total_population }}" placeholder="Enter population"
                            class="mt-1 block w-full" required autofocus autocomplete="off" />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-row">

            <div class="w-full">
                <x-input-label for="islandImage" :value="__('Island Image')" />
                <x-text-input id="islandImage" name="islandImage" type="text" value="{{ $island->islandImage }}"
                    placeholder="Display Island Image" class="mt-1 block w-full" required autofocus
                    autocomplete="off" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-bladewind::button color="red" class="text-black" uppercasing="false">
                <a href="{{ route('island.index') }}">Cancel</a>
            </x-bladewind::button>
            <x-bladewind::button can_submit="true" color="green" uppercasing="false">Save changes</x-bladewind::button>
        </div>
    </form>
</section>
