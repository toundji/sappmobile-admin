<?php

namespace App\Http\Livewire\Admin\Entreprise;

use App\Models\Entreprise as ModelsEntreprise;
use App\Models\Vehicule;
use Livewire\Component;

class Entreprise extends Component
{
    public $entreprise_id;

    public function mount($id) {
        $this->entreprise_id = $id;
    }

    public function render()
    {
        return view('livewire.admin.entreprise.entreprise', [
            "entreprise" => ModelsEntreprise::where('id', $this->entreprise_id)->first(),
        ]);
    }
}
