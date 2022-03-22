<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessageComponent extends Component
{
    public function render()
    {
        $messages=Message::latest()->paginate(10);
        return view('livewire.message-component',compact('messages'));
    }
    public function deletemessgae($id){
        return Message::destroy($id);
    }
}
