<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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
    <div class="w-full flex justify-center">
        <div class="w-full max-w-7xl flex flex-col items-center">
            <div class="flex flex-col w-full">
                <div class="w-full flex justify-between items-center my-4">
                    <div class="relative w-full max-w-md">
                        <div class="absolute inset-y-0 start-0 flex w-3/4 items-center">
                            <input type="text" id="searchInput" placeholder="Search islands..."
                                class="w-full px-4 py-2 pr-10 border rounded focus:outline-none focus:border-blue-500">
                            <svg class="absolute right-3 top-2/4 transform -translate-y-1/2 text-gray-400"
                                width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M10 2C5.589 2 2 5.589 2 10s3.589 8 8 8c1.85 0 3.573-.634 4.941-1.693l4.825 4.825 1.414-1.414-4.825-4.825C17.366 13.573 18 11.85 18 10c0-4.411-3.589-8-8-8zm0 2c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z" />
                            </svg>
                        </div>
                    </div>
                    <x-bladewind::button uppercasing="false" class="w-52 ml-4">
                        <a href="{{ route('island.create') }}">Add Island</a>
                    </x-bladewind::button>

                    {{--  use the paginate --}}


                </div>
            </div>
            <div class="w-full overflow-x-scroll">
                <table class="min-w-full divide-y divide-gray-200 mx-auto">
                    <thead class="bg-sky-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Name
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Area
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Total
                                Population
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                                Island Image</th>

                            <th
                                class="flex justify-center px-6 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody id="islandsTable" class="bg-white dark:bg-gray-800 divide-y divide-gray-200">
                        @foreach ($islands as $island)
                            <tr>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                    {{ $island->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $island->area }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $island->total_population }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                    {{ $island->islandImage }}</td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex flex-row justify-center gap-5">
                                        <div class="">
                                            <button
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold
                                                rounded py-2 px-4 ">
                                                <a href="{{ route('island.edit', ['island' => $island->id]) }}">Edit
                                                </a>
                                            </button>

                                        </div>
                                        <div class="">
                                            <form method="post"
                                                action="{{ route('island.destroy', ['island' => $island]) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
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
