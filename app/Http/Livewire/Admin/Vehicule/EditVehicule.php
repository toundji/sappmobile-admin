<?php

namespace App\Http\Livewire\Admin\Vehicule;

use App\Models\Category;
use App\Models\Conducteur;
use App\Models\Vehicule;
use App\Models\VehiculeConducteurHistory;
use Livewire\Component;

class EditVehicule extends Component
{
    public $vehicule_id;
    public $category_id;
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
        $this->vehicule_id = $id;
        $vehicule = Vehicule::where('id', $id)->first();
        $this->category_id = $vehicule->category_id;
        $this->matricule = $vehicule->matricule;
        $this->model = $vehicule->model;
        $this->marque = $vehicule->marque;
        $this->pays_fabrication = $vehicule->pays_fabrication;
        $this->couleur = $vehicule->couleur;
        $this->max_passenger = $vehicule->max_passenger;
        $this->status = $vehicule->status;
        $user = getUser(getConducteur($vehicule->conducteur_id)->user_id ?? 0);
        $this->conducteur_phone = ($user !== null) ? $user->phone : "";
        $this->conducteurs = Conducteur::where('status', 1)->get();
    }

    public function edit_vehicule() {
        $all = Vehicule::where('matricule', $this->matricule)->get();
        $set = true;
        if(count($all) != 0) {
            if(count($all) === 1) {
                if($all = Vehicule::where('matricule', $this->matricule)->where('id', $this->vehicule_id)->count() != 1) {
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
                    $conducteur_id = $conducteur->id;
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
            $conducteur_id = null;
        }


        if($set) {

            if(Vehicule::where('id', $this->vehicule_id)->first()->conducteur_id != $conducteur_id) {
                VehiculeConducteurHistory::where('vehicule_id', $this->vehicule_id)->where("dateEnd", null)->update(['dateEnd' => getDateLikeNow()]);
                VehiculeConducteurHistory::create(['conducteur_id' => $conducteur_id, "vehicule_id" => $this->vehicule_id]);
            }

            Vehicule::where('id', $this->vehicule_id)->update([
                'category_id' => $this->category_id,
                'matricule' => $this->matricule,
                'model' => $this->model,
                'max_passenger' => $this->max_passenger,
                'marque' => $this->marque,
                'pays_fabrication' => $this->pays_fabrication,
                'couleur' => $this->couleur,
                'status' => $this->status,
                "conducteur_id" =>$conducteur_id
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
