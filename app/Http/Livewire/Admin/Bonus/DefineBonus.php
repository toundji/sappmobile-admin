<?php

namespace App\Http\Livewire\Admin\Bonus;

use App\Models\BonusDefine;
use App\Models\BonusPrice;
use App\Models\Constante;
use Livewire\Component;

class DefineBonus extends Component
{
    public $number_sapp;
    public $cfa;

    public function set_bonus_price() {
        BonusPrice::where('status', 1)->update(['status' => 0]);

        BonusPrice::create([
            'cfa' => $this->cfa
        ]);

        Constante::where("name", "ONE_SAPP__NUMBER_CFA")->update(["value" => $this->cfa]);

        $this->cfa = "";

        session()->flash('success2', "Modifier avec succès");
    }

    public function set_define_bonus() {
        BonusDefine::where('status', 1)->update(['status' => 0]);

        BonusDefine::create([
            'number_sapp' => $this->number_sapp
        ]);

        Constante::where("name", "ONE_KM__NUMBER_SAPP")->update(["value" => $this->number_sapp]);

        $this->number_sapp = "";

        session()->flash('success1', "Modifier avec succès");
    }


    public function render()
    {
        return view('livewire.admin.bonus.define-bonus', [
            "bonus_defines" => BonusDefine::orderBy('created_at', 'desc')->get(),
            "bonus_prices" => BonusPrice::orderBy('created_at', 'desc')->get(),
            "ONE_KM__NUMBER_SAPP" => Constante::where("name", "ONE_KM__NUMBER_SAPP")->first(),
            "ONE_SAPP__NUMBER_CFA" => Constante::where("name", "ONE_SAPP__NUMBER_CFA")->first(),
        ]);
    }
}
