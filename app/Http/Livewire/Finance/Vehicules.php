<?php

namespace App\Http\Livewire\Finance;

use App\Models\Vehicule;
use Livewire\Component;

class Vehicules extends Component
{
    public $type;

    public function mount($type) {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.finance.vehicules', [
            'vehicules' => Vehicule::all()
        ]);
    }
}
