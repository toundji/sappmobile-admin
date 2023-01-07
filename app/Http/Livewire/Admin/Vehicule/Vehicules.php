<?php

namespace App\Http\Livewire\Admin\Vehicule;

use App\Models\Vehicule;
use Livewire\Component;

class Vehicules extends Component
{
    public function render()
    {
        return view('livewire.admin.vehicule.vehicules', [
            'vehicules' => Vehicule::all()
        ]);
    }
}
