<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $contacts=Contact::all();
        return view('livewire.contact-component', compact('contacts'));
    }
    public function deletecontact($id){
        return Contact::destroy($id);
    }
}
