<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add Contact') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Add Contact to your Database') }}
        </p>
    </header>

    <form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('POST')



        <div class="flex justify-center">
            <span class="material-symbols-outlined" style="font-size: 9rem;">
                account_circle
            </span>
        </div>

        <div class="flex justify-center">
            <div class="bg-sky-200 rounded-[30px] py-2 px-4 inline-flex items-center">
                <span class="text-black mr-2">
                    Upload a photo
                </span>
                <span class="material-symbols-outlined text-black">
                    add_a_photo
                </span>
            </div>
        </div>


        {{-- <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input id="avatar" type="file" name="avatar" class="mt-1 block w-full" />
        </div> --}} <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" placeholder="Enter Name"
                class="mt-1 block w-full" required autofocus autocomplete="off" />
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
                        style="color: #fffff;">
                        <span class="material-symbols-outlined">
                            keyboard_arrow_down
                        </span>
                        <option value="" disabled selected>Enter Sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
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
                <x-input-label for="status" :value="__('Status')" class="w-20" />
                <select id="status" name="status"
                    class="mt-1 block w-full border-1 bg-none border-gray-300 rounded-lg" required autofocus
                    style="color: #fffff;">
                    <option value="" disabled selected>Enter Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Not Active</option>
                </select>
            </div>


        </div>

        <div class="w-full relative">
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" name="location" type="text" placeholder="Enter Location"
                class="mt-1 block w-full pl-12 pr-10 flag-input" required autofocus autocomplete="off" />
        </div>

        <style>
            .flag-input {
                background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/800px-Flag_of_the_Philippines.svg.png?20230921003513');
                background-repeat: no-repeat;
                background-size: 24px 15px;
                background-position: 8px center;
            }
        </style>






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
