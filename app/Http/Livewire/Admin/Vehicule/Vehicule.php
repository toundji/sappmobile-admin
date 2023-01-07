<?php

namespace App\Http\Livewire\Admin\Vehicule;

use App\Models\Category;
use App\Models\Vehicule as ModelsVehicule;
use App\Models\VehiculeConducteurHistory;
use Livewire\Component;

class Vehicule extends Component
{
    public $vehicule_id;
    public $message;

    public function mount($id) {
        $this->vehicule_id = $id;
    }

    public function render()
    {
        return view('livewire.admin.vehicule.vehicule', [
            "vehicule" => ModelsVehicule::where('id', $this->vehicule_id)->first(),
            "history" => VehiculeConducteurHistory::where('vehicule_id', $this->vehicule_id)->orderBy('id', 'desc')->get()
        ]);
    }
}
