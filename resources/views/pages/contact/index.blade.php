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
                    <div class="relative w-full max-w-md">
                        <div class="absolute inset-y-0 start-0 flex w-3/4 items-center">
                            <input type="text" id="searchInput" placeholder="Search contacts..."
                                class="w-full px-4 py-2 pr-10 border rounded focus:outline-none focus:border-blue-500">
                            <svg class="absolute right-3 top-2/4 transform -translate-y-1/2 text-gray-400"
                                width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M10 2C5.589 2 2 5.589 2 10s3.589 8 8 8c1.85 0 3.573-.634 4.941-1.693l4.825 4.825 1.414-1.414-4.825-4.825C17.366 13.573 18 11.85 18 10c0-4.411-3.589-8-8-8zm0 2c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z" />
                            </svg>
                        </div>
                    </div>
                    <x-bladewind::button uppercasing="false" class="w-52 ml-4">
                        <a href="{{ route('contact.create') }}">Add Contact</a>
                    </x-bladewind::button>
                </div>
            </div>
            <div class="w-full overflow-x-scroll">
                <table class="min-w-full divide-y divide-gray-200 mx-auto">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Name</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Age</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Sex</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Religion</th>

                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Location</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Action</th>

                        </tr>
                    </thead>
                    <tbody id="contactsTable" class="bg-white dark:bg-gray-800 divide-y divide-gray-200">
                        @foreach ($contacts as $contact)
                            <tr>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                    {{ $contact->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $contact->age }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $contact->sex }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $contact->religion }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $contact->location }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex flex-row justify-between">
                                        <a href="{{ route('contact.edit', ['contact' => $contact->id]) }}"
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form method="post"
                                            action="{{ route('contact.destroy', ['contact' => $contact]) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        </form>
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
                let location = row.cells[4].innerText.toLowerCase();

                if (name.includes(filter) || age.includes(filter) || sex.includes(filter) || religion
                    .includes(filter) || location.includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</x-app-layout>
