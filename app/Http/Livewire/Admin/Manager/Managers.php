<?php

namespace App\Http\Livewire\Admin\Manager;

use App\Models\Gestionnaire;
use Carbon\Carbon;
use Livewire\Component;

class Managers extends Component
{

    public function delete_manager($manager_id) {
        Gestionnaire::where('id', $manager_id)->update(['deleted_at' => Carbon::now()]);
    }

    public function render()
    {
        return view('livewire.admin.manager.managers', [
            "managers" => Gestionnaire::where('is_gourou', 0)->whereNull('deleted_at')->get()
        ]);
    }
}
