<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add Island') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Add Island to your Database') }}
        </p>
    </header>

    <form method="post" action="{{ route('island.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" placeholder="Enter Name" class="mt-1 block w-full"
                required autofocus autocomplete="off" />
        </div>

        <div class="grid grid-col gap-4">

            <div class="">
                <x-input-label for="location" :value="__('Location')" class="w-20" />
                <x-text-input id="age" name="location" type="text" placeholder="Enter Location"
                    class="mt-1 block w-full" required autofocus autocomplete="off" />
            </div>

            <div class="">
                <x-input-label for="area" :value="__('Area')" class="w-20" />
                <x-text-input id="area" name="area" type="text" placeholder="Enter Area"
                    class="mt-1 block w-full" required autofocus autocomplete="off" />
            </div>

        </div>
        <div>
            <x-input-label for="total_population" :value="__('Total population')" />
            <x-text-input id="total_population" name="total_population" type="text"
                placeholder="Enter Total Population" class="mt-1 block w-full" required autofocus autocomplete="off" />
        </div>

        {{-- Parent Div --}}
        <div class="flex items-center gap-4">
            <x-bladewind::button color="grey" class="text-black" uppercasing='false'>
                <a href="{{ route('island.index') }}">
                    Cancel
            </x-bladewind::button>
            <x-bladewind::button can_submit="true" color="green" uppercasing='false'>
                Add
            </x-bladewind::button>
        </div>

    </form>
</section>
