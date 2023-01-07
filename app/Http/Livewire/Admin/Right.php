<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gestionnaire;
use Livewire\Component;

class Right extends Component
{
    public function mount() {

    }

    public function setRole($role) {
        $admin = Gestionnaire::where('id', 2)->first();
        if(str_contains($admin->role, $role.",")) {
            Gestionnaire::where('id', 2)->update(['role' => str_replace($role.",", "", $admin->role)]);
        } else {
            Gestionnaire::where('id', 2)->update(['role' => $admin->role.$role.","]);
        }
    }


    public function render()
    {
        return view('livewire.admin.right', [
            "admin" => Gestionnaire::where('id', 2)->first()
        ]);
    }
}
