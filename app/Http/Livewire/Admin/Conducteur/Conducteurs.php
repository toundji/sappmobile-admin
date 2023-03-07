<?php

namespace App\Http\Livewire\Admin\Conducteur;

use App\Models\Conducteur;
use Livewire\Component;

class Conducteurs extends Component
{


    public $title;

    public $ask_status = "APPROUVE";

    public function mount($title, $type) {
        $this->title = $title;

        if ($type == "APPROUVE") {
            $this->ask_status = "APPROUVE";
        } else if($type == "DEMANDE") {
            $this->ask_status = "DEMANDE";
        } else {
            $this->ask_status = "REJETE";
        }
    }

    public function render()
    {
        return view('livewire.admin.conducteur.conducteurs', [
            "conducteurs" => Conducteur::where('ask_status', $this->ask_status)->get()
        ]);
    }
}
