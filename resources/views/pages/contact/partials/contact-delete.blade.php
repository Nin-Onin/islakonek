<div>
    <x-bladewind::modal backdrop_can_close="false" name="delete-confirm" ok_button_action="submitDeleteForm()"
        ok_button_label="Delete" close_after_action="true">

        <form method="post" action="{{ route('contact.destroy', $selectedContact) }}" class="delete-form">
            @csrf
            @method('DELETE')
            <b class="mt-0">Are you sure you want to delete this contact?</b>
            <p class="mt-4">This action cannot be undone.</p>
        </form>

    </x-bladewind::modal>


</div>

<script>
    submitDeleteForm = () => {
        if (validateForm('.delete-form')) {
            domEl('.delete-form').submit();
        } else {
            return false;
        }
    }
</script>
