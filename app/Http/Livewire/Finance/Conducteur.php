<?php

namespace App\Http\Livewire\Finance;

use App\Models\Conducteur as ModelsConducteur;
use App\Models\Transport;
use Livewire\Component;

class Conducteur extends Component
{
    public $total;
    public $payement_mode;
    public $type;
    public $filter; public $conducteur_id;

    public $date, $month, $year, $start, $end;

    public function mount($type, $id) {
        $this->conducteur_id = $id;
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
            $transports = Transport::where('status', "DEMANDE")->where('conducteur_id', $this->conducteur_id)->whereDate('created_at', $this->date)->get();
        } elseif ($this->type == "month") {
            $this->filter = "Mois : ".$this->month;
            $month = explode("-", $this->month)[1];
            $year = explode("-", $this->month)[0];
            $transports = Transport::where('status', "DEMANDE")->where('conducteur_id', $this->conducteur_id)->whereYear('created_at', $year)->whereMonth('created_at', $month)->get();
        } elseif ($this->type == "year") {
            $this->filter = "Année : ".$this->year;
            $transports = Transport::where('status', "DEMANDE")->where('conducteur_id', $this->conducteur_id)->whereYear('created_at', $this->year)->get();
        } elseif ($this->type == "interval") {
            $this->filter = "Intervalle : [".$this->start.", ".$this->end."]";
            $transports = Transport::where('status', "DEMANDE")->where('conducteur_id', $this->conducteur_id)->whereBetween('created_at', [$this->start, $this->end])->get();
        }
        if ($this->payement_mode != "all") {
            $transports = $transports->where('payement_mode', $this->payement_mode);
        }
        $this->total = $transports->sum('price');
        return view('livewire.finance.conducteur', [
            "transports" => $transports,
            "conducteur" => ModelsConducteur::where('id', $this->conducteur_id)->first()
        ]);
    }
}
