<?php

namespace App\Http\Livewire\Admin\Vehicule;

use App\Models\Category;
use App\Models\Vehicule as ModelsVehicule;
use App\Models\VehiculeConducteurHistory;
use Livewire\Component;

class Vehicule extends Component
{
    public $id_vehicule;
    public $message;

    public function mount($id) {
        $this->id_vehicule = $id;
    }

    public function render()
    {
        return view('livewire.admin.vehicule.vehicule', [
            "vehicule" => ModelsVehicule::where('id', $this->id_vehicule)->first(),
            "history" => VehiculeConducteurHistory::where('id_vehicule', $this->id_vehicule)->orderBy('id', 'desc')->get()
        ]);
    }
}
