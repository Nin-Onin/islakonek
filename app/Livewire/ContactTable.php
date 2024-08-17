<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Livewire\Attributes\On;

class ContactTable extends Component
{
    public $selectedContact = 1;

    #[On('select-contant')]
    public function selectContact($id)
    {
        $this->selectedContact = $id;
    }

    public function render()
    {
        $contacts = Contact::simplePaginate(20);
        return view('livewire.contact-table', compact('contacts'));
    }
}
