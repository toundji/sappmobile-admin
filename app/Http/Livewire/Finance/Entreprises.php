<?php

namespace App\Http\Livewire\Finance;

use App\Models\Entreprise;
use Livewire\Component;

class Entreprises extends Component
{
    public $type;

    public function mount($type) {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.finance.entreprises', [
            "entreprises" => Entreprise::all()
        ]);
    }
}
