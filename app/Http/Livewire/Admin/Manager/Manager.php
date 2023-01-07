<?php

namespace App\Http\Livewire\Admin\Manager;

use App\Models\Gestionnaire;
use Livewire\Component;

class Manager extends Component
{
    public $manager_id;

    public function mount($id) {
        $this->manager_id = $id;
    }

    public function setRole($role) {
        $admin = Gestionnaire::where('id', $this->manager_id)->first();
        $roles = $admin->role;
        if (autorisationAuth($role, $this->manager_id)) {
            $roles = str_replace($role.",", "", $roles);
        } else {
            $roles = $roles.$role.",";
        }
        Gestionnaire::where('id', $this->manager_id)->update(['role' => $roles]);
        return redirect()->route('admin.manager', ["id" => $this->manager_id]);
    }

    public function render()
    {
        return view('livewire.admin.manager.manager', [
            "manager" => Gestionnaire::where('id', $this->manager_id)->first()
        ]);
    }
}
