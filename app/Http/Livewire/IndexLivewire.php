<?php

namespace App\Http\Livewire;

use App\Models\Room;
use Livewire\Component;

class IndexLivewire extends Component
{
    public $rooms;
    public $beds;
    public $roomnumber;
    public function render()
    {
        return view('livewire.index-livewire');

    }
    public function deleteroom($id){
        return Room::destroy($id);
    }
}
