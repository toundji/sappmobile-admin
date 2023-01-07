<?php

namespace App\Http\Livewire\Admin\Client;

use App\Models\User;
use Livewire\Component;

class Clients extends Component
{

    public function render()
    {
        return view('livewire.admin.client.clients', [
            "users" => User::all()
        ]);
    }
}
