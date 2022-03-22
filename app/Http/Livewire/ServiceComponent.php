<?php

namespace App\Http\Livewire;

use App\Models\Services;
use Livewire\Component;

class ServiceComponent extends Component
{
    public function render()
    {
        $services=Services::latest()->paginate(5);
        return view('livewire.service-component',compact('services'));
    }
    public function deleteservice($id){
        return Services::destroy($id);
    }
}
