<?php

namespace App\Http\Livewire\Finance;

use App\Models\User;
use Livewire\Component;

class Clients extends Component
{
    public $type;

    public function mount($type) {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.finance.clients', [
            "users" => User::all()
        ]);
    }
}
