<?php

namespace App\Http\Livewire\Finance;

use App\Models\Conducteur;
use Livewire\Component;

class Conducteurs extends Component
{
    public $type;

    public function mount($type) {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.finance.conducteurs', [
            "conducteurs" => Conducteur::where('status', 1)->get()
        ]);
    }
}
