<?php

namespace App\Http\Livewire\Admin\Vehicule;

use App\Models\Category;
use App\Models\Conducteur;
use App\Models\Vehicule;
use App\Models\VehiculeConducteurHistory;
use Livewire\Component;

class EditVehicule extends Component
{
    public $id_vehicule;
    public $id_category;
    public $matricule;
    public $model;
    public $marque;
    public $pays_fabrication;
    public $conducteur_phone;
    public $couleur;
    public $max_passenger;
    public $status;
    public $conducteurs;

    public function mount($id) {
        $this->id_vehicule = $id;
        $vehicule = Vehicule::where('id', $id)->first();
        $this->id_category = $vehicule->id_category;
        $this->matricule = $vehicule->matricule;
        $this->model = $vehicule->model;
        $this->marque = $vehicule->marque;
        $this->pays_fabrication = $vehicule->pays_fabrication;
        $this->couleur = $vehicule->couleur;
        $this->max_passenger = $vehicule->max_passenger;
        $this->status = $vehicule->status;
        $this->conducteur_phone = $vehicule->conducteur->user->phone;
        $this->conducteurs = Conducteur::where('status', 1)->get();
    }

    public function edit_vehicule() {
        $all = Vehicule::where('matricule', $this->matricule)->get();
        $set = true;
        if(count($all) != 0) {
            if(count($all) === 1) {
                if($all = Vehicule::where('matricule', $this->matricule)->where('id', $this->id_vehicule)->count() != 1) {
                    $set = false;
                }
            } else {
                $set = false;
            }
        }

        if($this->conducteur_phone != "") {
            $r = false;
            $userr = getUserByPhone($this->conducteur_phone);
            if($userr != null) {
                $conducteur = getConducteurByUser($userr->id);
                if($conducteur != null) {
                    $id_conducteur = $conducteur->id;
                } else {
                    $r = true;
                }
            } else {
                $r = true;
            }

            if($r) {
                session()->flash("error", "Numéro de téléphone incorrect.");
                return;
            }
        } else {
            $id_conducteur = null;
        }


        if($set) {

            if(Vehicule::where('id', $this->id_vehicule)->first()->id_conducteur != $id_conducteur) {
                VehiculeConducteurHistory::where('id_vehicule', $this->id_vehicule)->where("dateEnd", null)->update(['dateEnd' => getDateLikeNow()]);
                VehiculeConducteurHistory::create(['id_conducteur' => $id_conducteur, "id_vehicule" => $this->id_vehicule]);
            }

            Vehicule::where('id', $this->id_vehicule)->update([
                'id_category' => $this->id_category,
                'matricule' => $this->matricule,
                'model' => $this->model,
                'max_passenger' => $this->max_passenger,
                'marque' => $this->marque,
                'pays_fabrication' => $this->pays_fabrication,
                'couleur' => $this->couleur,
                'status' => $this->status,
                "id_conducteur" =>$id_conducteur
            ]);

            session()->flash("success", "Véhicule modifié ave succès.");
        } else {
            session()->flash("error", "Un véhicule enregistré a ce matricule.");
        }
    }
    public function render()
    {
        return view('livewire.admin.vehicule.edit-vehicule', [
            "categories" => Category::all()
        ]);
    }
}
