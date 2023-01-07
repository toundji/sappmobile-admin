<?php

namespace App\Http\Livewire\Admin\Conducteur;

use App\Models\Conducteur;
use Livewire\Component;

class Conducteurs extends Component
{


    public $title;

    public $status = 1;

    public function mount($title, $type) {
        $this->title = $title;

        if ($type == "approved") {
            $this->status = 1;
        } else if($type == "process") {
            $this->status = 0;
        } else {
            $this->status = -1;
        }
    }

    public function render()
    {
        return view('livewire.admin.conducteur.conducteurs', [
            "conducteurs" => Conducteur::where('status', $this->status)->get()
        ]);
    }
}
