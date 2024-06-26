<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Edit Contact') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Edit Contact Information') }}
        </p>
    </header>

    <form method="post" action="{{ route('contact.update', ['contact' => $contact]) }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" value="{{ $contact->name }}" placeholder="Enter Name"
                class="mt-1 block w-full" required autofocus autocomplete="off" />
        </div>

        <div class="grid grid-col gap-4">

            <div class="flex flex-row">
                <div class="w-full">
                    <x-input-label for="age" :value="__('Age')" class="w-20" />
                    <x-text-input id="age" name="age" type="text" value="{{ $contact->age }}"
                        placeholder="Enter Age" class="mt-1 block w-full" required autofocus autocomplete="off" />
                </div>

                <div class="w-full">
                    <x-input-label for="sex" :value="__('Sex')" class="w-20" />
                    <select id="sex" name="sex" value="{{ $contact->sex }}"
                        class="mt-1 block w-full border-1 bg-none border-gray-300 rounded-lg" required autofocus
                        style="background-color: #111827; color: #ffffff;">
                        <option value="" disabled {{ $contact->sex == '' ? 'selected' : '' }}>Enter Sex</option>
                        <option value="male" {{ $contact->sex == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $contact->sex == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ $contact->sex == 'other' ? 'selected' : '' }}>Other</option>
                    </select>

                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-full">
                <x-input-label for="religion" :value="__('Religion')" />
                <x-text-input id="religion" name="religion" type="text" value="{{ $contact->religion }}"
                    placeholder="Enter Religion" class="mt-1 block w-full" required autofocus autocomplete="off" />
            </div>

            <div class="w-full">
                <x-input-label for="location" :value="__('Location')" />
                <x-text-input id="location" name="location" type="text" value="{{ $contact->location }}"
                    placeholder="Enter Location" class="mt-1 block w-full" required autofocus autocomplete="off" />
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
                Save changes
            </x-bladewind::button>
        </div>


    </form>
</section>
