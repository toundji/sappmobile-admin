<?php

namespace App\Http\Livewire\Admin\Client;

use App\Models\Client as ModelsClient;
use App\Models\Complice;
use App\Models\PaiementBancaire;
use App\Models\PaiementLocal;
use App\Models\Transport;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Client extends Component
{
    use WithPagination;

    public function mount($id) {
        $this->id = $id;
    }

    public function render()
    {
        return view('livewire.admin.client.client', [
            'user' => User::where('id', $this->id)->first()
        ]);
    }
}
