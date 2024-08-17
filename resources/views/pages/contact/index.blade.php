<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>



    <div class="w-full flex justify-center">
        @livewire('contact-table')
    </div>

    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll('#contactsTable tr');

            rows.forEach(row => {
                let name = row.cells[0].innerText.toLowerCase();
                let age = row.cells[1].innerText.toLowerCase();
                let sex = row.cells[2].innerText.toLowerCase();
                let phoneNumber = row.cells[3].innerText.toLowerCase();
                let status = row.cells[4].innerText.toLowerCase();
                let location = row.cells[5].innerText.toLowerCase();

                if (name.includes(filter) || age.includes(filter) || sex.includes(filter) || phoneNumber
                    .includes(filter) || status.includes(filter) || location.includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</x-app-layout>
