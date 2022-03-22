<?php

namespace App\Http\Livewire;

use App\Models\Coment;
use Livewire\Component;

class ComentComponent extends Component
{
    public function render()
    {
        $coments=Coment::latest()->paginate(10);
        return view('livewire.coment-component', compact('coments'));
    }
    public function deletecoment($id){
        return Coment::destroy($id);
    }
}
