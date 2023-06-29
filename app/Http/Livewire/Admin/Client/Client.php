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

    public $user_id;

    public function mount($id) {
        $this->user_id = $id;
    }
    
    public function set_status($status) {
        User::where('id', $this->user_id)->update(['status' => $status]);
    }

    public function render()
    {
        return view('livewire.admin.client.client', [
            'user' => User::where('id', $this->user_id)->first()
        ]);
    }
}
