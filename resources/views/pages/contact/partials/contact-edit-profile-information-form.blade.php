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
                        class="mt-1 block w-full border-1 bg-none border-gray-300 rounded-lg bg-whit" required
                        autofocus>
                        <option class= "text-blue" value="" disabled {{ $contact->sex == '' ? 'selected' : '' }}>
                            Enter Sex</option>
                        <option class= "text-blue" value="male" {{ $contact->sex == 'male' ? 'selected' : '' }}>Male
                        </option>
                        <option class= "text-blue" value="female" {{ $contact->sex == 'female' ? 'selected' : '' }}>
                            Female</option>
                        <option class= "text-blue" value="other" {{ $contact->sex == 'other' ? 'selected' : '' }}>Other
                        </option>
                    </select>

                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-full">
                <x-input-label for="phoneNumber" :value="__('Phone Number')" />
                <x-text-input id="phoneNumber" name="phoneNumber" type="text" value="{{ $contact->phoneNumber }}"
                    placeholder="Enter Phone Number" class="mt-1 block w-full" required autofocus autocomplete="off" />
            </div>

            <div class="w-full">
                <x-input-label for="status" :value="__('Status')" class="w-20" />
                <select id="status" name="status" value="{{ $contact->status }}"
                    class="mt-1 block w-full border-1 bg-none border-gray-300 bg-white  rounded-lg" required autofocus>
                    <option class= "text-blue" value="" disabled {{ $contact->status == '' ? 'selected' : '' }}>
                        Enter Status
                    </option>
                    <option class= "text-blue" value="active" {{ $contact->status == 'active' ? 'selected' : '' }}>
                        Active</option>
                    <option class= "text-blue" value="not active"
                        {{ $contact->status == 'not active' ? 'selected' : '' }}>Not Active
                    </option>
                </select>

            </div>

        </div>

        <div class="w-full">
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" name="location" type="text" value="{{ $contact->location }}"
                placeholder="Enter Location" class="mt-1 block w-full" required autofocus autocomplete="off" />
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
