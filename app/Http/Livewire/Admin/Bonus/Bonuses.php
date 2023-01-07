<?php

namespace App\Http\Livewire\Admin\Bonus;

use App\Models\Bonus;
use App\Models\BonusPrice;
use App\Models\Constante;
use App\Models\PorteFeuille;
use Livewire\Component;

class Bonuses extends Component
{
    public $total;
    public $totalCFA;
    public $one_sapp;

    public function mount() {
        $this->total = PorteFeuille::sum("sapp");

        $this->totalCFA = Constante::where("name", "ONE_SAPP__NUMBER_CFA")->first()->value * $this->total;
        $this->one_sapp = Constante::where("name", "ONE_SAPP__NUMBER_CFA")->first()->value;
    }

    public function render()
    {
        return view('livewire.admin.bonus.bonuses', [
            "bonuses" => PorteFeuille::where('sapp', ">", 0)->orderBy('sapp', 'desc')->get()
        ]);
    }
}
