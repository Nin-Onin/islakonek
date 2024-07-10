<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div>
        @if (session()->has('success'))
            <x-bladewind::alert type="success">
                {{ session('success') }}
            </x-bladewind::alert>
        @endif
    </div>

    <div class="w-full flex justify-center">
        <div class="w-full max-w-7xl flex flex-col items-center">
            <div class="flex flex-col w-full">
                <div class="w-full flex justify-between items-center my-4">

                    {{-- Search and filter area --}}
                    <div class="w-full flex flex-row items-center">
                        <div class="relative w-1/3">
                            <input type="text" id="searchInput" placeholder="Search contacts..."
                                class="w-full py-2 border rounded focus:outline-none focus:border-blue-500">
                            <svg class="absolute right-3 top-2/4 transform -translate-y-1/2 text-gray-400"
                                width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M10 2C5.589 2 2 5.589 2 10s3.589 8 8 8c1.85 0 3.573-.634 4.941-1.693l4.825 4.825 1.414-1.414-4.825-4.825C17.366 13.573 18 11.85 18 10c0-4.411-3.589-8-8-8zm0 2c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z" />
                            </svg>
                        </div>
                        {{-- filter button --}}
                        <div class="px-3 relative" x-data="{ open: false }">
                            <button @click="open = !open" class="">
                                <span class="material-symbols-outlined">
                                    tune
                                </span>
                            </button>

                            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2">
                                <div class="w-40 py-2 bg-white border rounded-lg shadow-xl text-center">
                                    <a href="#"
                                        class="block px-4 py-2 font-bold text-gray-800 hover:bg-green-500 hover:text-white">Active</a>
                                    <a href="#"
                                        class="block px-4 py-2 font-bold text-gray-800 hover:bg-red-500 hover:text-white">Not
                                        Active</a>
                                    <a href="#"
                                        class="block px-4 py-2 font-bold text-gray-800 hover:bg-blue-500 hover:text-white">All</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Add contact button --}}

                    <div>
                        <x-bladewind::button uppercasing="false" class="w-52 ml-4">
                            <a href="{{ route('contact.create') }}">Add Contact</a>
                        </x-bladewind::button>

                    </div>
                    {{--  use the paginate --}}


                </div>
            </div>
            <div class="w-full overflow-x-scroll">
                <table class="min-w-full divide-y divide-gray-200 mx-auto">
                    <thead class="bg-sky-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Name
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Age
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Sex
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                                Religion</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Status
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                                Location</th>
                            <th
                                class="flex justify-center px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                                Action</th>
                        </tr>
                    </thead>

                    <tbody id="contactsTable" class="bg-white dark:bg-gray-800 divide-y divide-gray-200">
                        @foreach ($contacts as $contact)
                            <tr>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100 flex items-center">
                                    <img src="{{ $contact->photo }}" alt="Contact Photo"
                                        class="h-10 w-10 rounded-full mr-4">
                                    <div>{{ $contact->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $contact->age }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $contact->sex }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $contact->religion }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <span
                                        class="{{ $contact->status == 'active' ? 'text-green-500' : 'text-red-500' }}">
                                        <b>{{ $contact->status }}</b>
                                    </span>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $contact->location }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex flex-row justify-center gap-5">
                                        <div class="">
                                            <button
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold
                                                rounded py-2 px-4 ">
                                                <a href="{{ route('contact.edit', ['contact' => $contact->id]) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>
                                                </a>
                                            </button>

                                        </div>
                                        <div class="">
                                            <form method="post"
                                                action="{{ route('contact.destroy', ['contact' => $contact]) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><svg
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>






    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll('#contactsTable tr');

            rows.forEach(row => {
                let name = row.cells[0].innerText.toLowerCase();
                let age = row.cells[1].innerText.toLowerCase();
                let sex = row.cells[2].innerText.toLowerCase();
                let religion = row.cells[3].innerText.toLowerCase();
                let status = row.cells[4].innerText.toLowerCase();
                let location = row.cells[5].innerText.toLowerCase();

                if (name.includes(filter) || age.includes(filter) || sex.includes(filter) || religion
                    .includes(filter) || status.includes(filter) || location.includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</x-app-layout>
