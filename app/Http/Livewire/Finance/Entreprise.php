<?php

namespace App\Http\Livewire\Finance;

use App\Models\Entreprise as ModelsEntreprise;
use App\Models\Transport;
use App\Models\Vehicule;
use Livewire\Component;

class Entreprise extends Component
{
    public $total;
    public $payement_mode;
    public $type;
    public $filter; public $entreprise_id;

    public $date, $month, $year, $start, $end;

    public function mount($type, $id) {
        $this->entreprise_id = $id;
        $this->payement_mode = "all";
        $this->type = $type;
        $this->date = date("Y-m-d");
        $this->start = date("Y-m-d");
        $this->end = date("Y-m-d");
        $this->month = date("Y-m");
        $this->year = date("Y");

        if ($this->type == "day") {
            $this->filter = "Jour : ".$this->date;
        } elseif ($this->type == "month") {
            $this->filter = "Mois : ".$this->month;
        } elseif ($this->type == "year") {
            $this->filter = "Année : ".$this->year;
        }

    }


    public function render()
    {
        $transports = [];
        if ($this->type == "day") {
            $this->filter = "Jour : ".$this->date;
            $transports = Transport::where('status', "DEMANDE")->whereIn('vehicule_id', Vehicule::where('entreprise_id', $this->entreprise_id)->select('id')->get())->whereDate('created_at', $this->date)->get();
        } elseif ($this->type == "month") {
            $this->filter = "Mois : ".$this->month;
            $month = explode("-", $this->month)[1];
            $year = explode("-", $this->month)[0];
            $transports = Transport::where('status', "DEMANDE")->whereIn('vehicule_id', Vehicule::where('entreprise_id', $this->entreprise_id)->select('id')->get())->whereYear('created_at', $year)->whereMonth('created_at', $month)->get();
        } elseif ($this->type == "year") {
            $this->filter = "Année : ".$this->year;
            $transports = Transport::where('status', "DEMANDE")->whereIn('vehicule_id', Vehicule::where('entreprise_id', $this->entreprise_id)->select('id')->get())->whereYear('created_at', $this->year)->get();
        } elseif ($this->type == "interval") {
            $this->filter = "Intervalle : [".$this->start.", ".$this->end."]";
            $transports = Transport::where('status', "DEMANDE")->whereIn('vehicule_id', Vehicule::where('entreprise_id', $this->entreprise_id)->select('id')->get())->whereBetween('created_at', [$this->start, $this->end])->get();
        }
        if ($this->payement_mode != "all") {
            $transports = $transports->where('payement_mode', $this->payement_mode);
        }
        $this->total = $transports->sum('price');
        return view('livewire.finance.entreprise', [
            "transports" => $transports,
            "entreprise" => ModelsEntreprise::where('id', $this->entreprise_id)->first()
        ]);
    }
}
