<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Islands') }}
        </h2>
    </x-slot>





    <div>
        @if (session()->has('success'))
            <x-bladewind::alert type="success">
                {{ session('success') }}
            </x-bladewind::alert>
        @endif
    </div>
    <div class="flex justify-center w-full">
        <div class="flex flex-col items-center w-full max-w-7xl">
            <div class="flex flex-col w-full">
                <div class="flex items-center justify-between w-full my-4">
                    <div class="relative w-full max-w-md">
                        <div class="absolute inset-y-0 flex items-center w-3/4 start-0">
                            <input type="text" id="searchInput" placeholder="Search islands..."
                                class="w-full px-4 py-2 pr-10 border rounded focus:outline-none focus:border-blue-500">
                            <svg class="absolute text-gray-400 transform -translate-y-1/2 right-3 top-2/4"
                                width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M10 2C5.589 2 2 5.589 2 10s3.589 8 8 8c1.85 0 3.573-.634 4.941-1.693l4.825 4.825 1.414-1.414-4.825-4.825C17.366 13.573 18 11.85 18 10c0-4.411-3.589-8-8-8zm0 2c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z" />
                            </svg>
                        </div>
                    </div>
                    <x-bladewind::button uppercasing="false" class="ml-4 w-52">
                        <a href="{{ route('island.create') }}">Add Island</a>
                    </x-bladewind::button>




    </div>
    </div>
    <div class="w-full overflow-x-scroll">
        <table class="min-w-full mx-auto divide-y divide-gray-200">
            <thead class="bg-sky-200">
                <tr>
                    <th class="px-6 py-3 text-xs font-bold tracking-wider text-left text-black uppercase">Name
                    </th>
                    <th class="px-6 py-3 text-xs font-bold tracking-wider text-left text-black uppercase">Area
                    </th>
                    <th class="px-6 py-3 text-xs font-bold tracking-wider text-left text-black uppercase">Total
                        Population
                    </th>
                    <th class="px-6 py-3 text-xs font-bold tracking-wider text-left text-black uppercase">
                        Island Image</th>

                    <th
                        class="flex justify-center px-6 py-3 text-xs font-bold tracking-wider text-left text-black uppercase">
                        Action</th>
                </tr>
            </thead>
            <tbody id="islandsTable" class="bg-white divide-y divide-gray-200 dark:bg-gray-800">
                @foreach ($islands as $island)
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-gray-100">
                            {{ $island->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-300">
                            {{ $island->area }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-300">
                            {{ $island->total_population }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-300">
                            {{ $island->islandImage }}</td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex flex-row justify-center gap-5">
                                <div class="">
                                    <button
                                        class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700 ">
                                        <a href="{{ route('island.edit', ['island' => $island->id]) }}"><span class="material-symbols-outlined">
                                            edit_square
                                            </span>
                                        </a>
                                    </button>

                                </div>
                                <div class="">
                                    <form method="post" action="{{ route('island.destroy', ['island' => $island]) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700"><span class="material-symbols-outlined">
                                                delete
                                                </span></button>
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
            let rows = document.querySelectorAll('#islandsTable tr');

            rows.forEach(row => {
                let name = row.cells[0].innerText.toLowerCase();
                let area = row.cells[1].innerText.toLowerCase();
                let total_population = row.cells[2].innerText.toLowerCase();
                let islandImage = row.cells[3].innerText.toLowerCase();

                if (name.includes(filter) || area.includes(filter) || total_population.includes(filter) ||
                    islandImage
                    .includes(filter) || islandImage.includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</x-app-layout>
