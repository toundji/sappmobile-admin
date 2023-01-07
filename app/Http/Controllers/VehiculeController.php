<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{

    public function vehicules() {
        $page = "vehicules";
        $title = "Liste des véhicules";
        return view("admin.allvehicule", compact("page", "title"));
    }

    public function vehicule($id) {
        $vehicule = Vehicule::where('id', $id)->first();
        if($vehicule != null) {
            $page = "vehicule";
            $title = "Véhicule > ".$vehicule->matricule;
            $id = $vehicule->id;
            return view("admin.allvehicule", compact("page", "title", "id"));
        }
    }

    public function edit_vehicule($id) {
        $vehicule = Vehicule::where('id', $id)->first();
        if($vehicule != null) {
            $page = "edit-vehicule";
            $title = "Véhicule > ".$vehicule->matricule;
            $id = $vehicule->id;
            return view("admin.allvehicule", compact("page", "title", "id"));
        }
    }

    public function add_vehicule() {
        $page = "add-vehicule";
        $title = "Ajouter un véhicule";
        return view("admin.allvehicule", compact("page", "title"));
    }

    public function price() {
        $page = "price";
        $title = "Les prix";
        return view("admin.allvehicule", compact("page", "title"));
    }

    public function edit_classe($id) {
        $category = Category::where('id', $id)->first();
        if($category != null) {
            $page = "edit-classe";
            $title = "Classe > ".$category->name;
            $id = $category->id;
            return view("admin.allvehicule", compact("page", "title", "id"));
        }
    }

    public function add_classe() {
        $page = "add-classe";
        $title = "Ajouter une classe de véhicule";
        return view("admin.allvehicule", compact("page", "title"));
    }


}
