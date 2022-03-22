<?php

namespace App\Http\Livewire;

use App\Models\About;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $infos=About::all();
        return view('livewire.about-component',compact('infos'));
    }
    public function deleteabout($id){
        return About::destroy($id);
    }
}
