<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add Contact') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Add Contact to your Database') }}
        </p>
    </header>

    <form method="post" action="{{ route('contact.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" placeholder="Enter Name" class="mt-1 block w-full"
                required autofocus autocomplete="off" />
        </div>

        <div class="grid grid-col gap-4">

            <div class="flex flex-row">
                <div class="w-full">
                    <x-input-label for="age" :value="__('Age')" class="w-20" />
                    <x-text-input id="age" name="age" type="text" placeholder="Enter Age"
                        class="mt-1 block w-full" required autofocus autocomplete="off" />
                </div>

                <div class="w-full">
                    <x-input-label for="sex" :value="__('Sex')" class="w-20" />
                    <select id="sex" name="sex"
                        class="mt-1 block w-full border-1 bg-none border-gray-300 rounded-lg" required autofocus
                        style="background-color: #111827; color: #fffff;">
                        <option value="" disabled selected>Enter Sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-full">
                <x-input-label for="religion" :value="__('Religion')" />
                <x-text-input id="religion" name="religion" type="text" placeholder="Enter Religion"
                    class="mt-1 block w-full" required autofocus autocomplete="off" />
            </div>

            <div class="w-full">
                <x-input-label for="civil_status" :value="__('Civil Status')" />
                <x-text-input id="civil_status" name="civil_status" type="text" placeholder="Enter Civil Status"
                    class="mt-1 block w-full" required autofocus autocomplete="off" />
            </div>
        </div>

        <div>
            <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
            <x-text-input id="date_of_birth" name="date_of_birth" type="text" placeholder="xxxx - xx - xx"
                class="mt-1 block w-full" required autofocus autocomplete="off" />
        </div>



        <div class="flex flex-row">

            <div class="w-full">
                <x-input-label for="location" :value="__('Location')" />
                <x-text-input id="location" name="location" type="text" placeholder="Enter Location"
                    class="mt-1 block w-full" required autofocus autocomplete="off" />
            </div>

            <div class="w-full">
                <x-input-label for="phone_number" :value="__('Phone Number')" />
                <x-text-input id="phone_number" name="phone_number" type="text" placeholder="+63 000-0000-000"
                    class="mt-1 block w-full" required autofocus autocomplete="off" />
            </div>
        </div>

        {{-- Parent Div --}}
        <div class="flex items-center gap-4">
            <x-bladewind::button color="red" class="text-black" uppercasing="false">
                <a href="{{ route('contact.index') }}">
                    Cancel
                </a>
            </x-bladewind::button>
            <x-bladewind::button can_submit="true" color="green" uppercasing="false">
                Add
            </x-bladewind::button>
        </div>


    </form>
</section>
