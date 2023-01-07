<?php

namespace App\Http\Livewire\Admin\Vehicule;

use App\Models\Category;
use App\Models\Vehicule;
use Livewire\Component;

class AddVehicule extends Component
{
    public $category_id;
    public $matricule;
    public $model;
    public $marque;
    public $pays_fabrication;
    public $couleur;

    public function add_vehicule() {
        $number = Vehicule::where('matricule', $this->matricule)->count();
        if($number === 0) {
            Vehicule::create([
                'category_id' => $this->category_id,
                'matricule' => $this->matricule,
                'model' => $this->model,
                'marque' => $this->marque,
                'pays_fabrication' => $this->pays_fabrication,
                'couleur' => $this->couleur,
                'id_entreprise' => 1,
            ]);

            $this->category_id = "";
            $this->matricule = "";
            $this->model = "";
            $this->marque = "";
            $this->pays_fabrication = "";
            $this->couleur = "";
            session()->flash("success", "Véhicule ajouté ave succès.");
        } else {
            session()->flash("error", "Vous avez déjà enregistré un véhicule qui a ce matricule.");
        }
    }

    public function render()
    {
        return view('livewire.admin.vehicule.add-vehicule', [
            "categories" => Category::all()
        ]);
    }
}
