<?php

namespace App\Http\Livewire\Admin\Entreprise;

use App\Models\Entreprise;
use Livewire\Component;

class Entreprises extends Component
{
    public function render()
    {
        return view('livewire.admin.entreprise.entreprises', [
            "entreprises" => Entreprise::all()
        ]);
    }
}
