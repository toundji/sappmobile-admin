<?php

namespace App\Http\Livewire\Admin\Operation;

use App\Models\Transport;
use Livewire\Component;

class Operations extends Component
{

    public $status = "DEMANDE";

    public function mount($type) {
        $array = array('DEMANDE','RECHERCHE','NEGOCIATION','VALIDE','ATTENTE','EN COURS','TERMINE','ANNULE');
        if (in_array($type, $array)) {
            $this->status = $type;
        } else {
            $this->status = $type;
        }
    }

    public function render()
    {
        return view('livewire.admin.operation.operations', [
            "transports" => Transport::where("status", $this->status)->get()
        ]);
    }
}
