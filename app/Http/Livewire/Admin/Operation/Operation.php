<?php

namespace App\Http\Livewire\Admin\Operation;

use App\Models\Transport;
use Livewire\Component;

class Operation extends Component
{
    public $transport_id;

    public function mount($id) {
        $this->transport_id = $id;
    }

    public function render()
    {
        return view('livewire.admin.operation.operation', [
            "transport" => Transport::where('id', $this->transport_id)->first()
        ]);
    }
}
