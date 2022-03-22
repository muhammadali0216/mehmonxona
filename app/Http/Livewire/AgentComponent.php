<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use Livewire\Component;

class AgentComponent extends Component
{
    public function render()
    {
        $agents=Agent::latest()->simplepaginate(10);;
        return view('livewire.agent-component', compact('agents'));
    }
    public function deleteagent($id){
        return Agent::destroy($id);
    }
}
