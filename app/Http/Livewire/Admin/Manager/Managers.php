<?php

namespace App\Http\Livewire\Admin\Manager;

use App\Models\Gestionnaire;
use Livewire\Component;

class Managers extends Component
{
    public function render()
    {
        return view('livewire.admin.manager.managers', [
            "managers" => Gestionnaire::where('is_gourou', 0)->get()
        ]);
    }
}
