<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{

    public function vehicules() {
        $page = "admin.vehicule.vehicules";
        $title = "Liste des véhicules";
        return view("admin.all", compact("page", "title"));
    }

    public function vehicule($id) {
        $vehicule = Vehicule::where('id', $id)->first();
        if($vehicule != null) {
            $page = "admin.vehicule.vehicule";
            $title = "Véhicule > ".$vehicule->matricule;
            $id = $vehicule->id;
            return view("admin.all", compact("page", "title", "id"));
        }
    }

    public function edit_vehicule($id) {
        $vehicule = Vehicule::where('id', $id)->first();
        if($vehicule != null) {
            $page = "admin.vehicule.edit-vehicule";
            $title = "Véhicule > ".$vehicule->matricule;
            $id = $vehicule->id;
            return view("admin.all", compact("page", "title", "id"));
        }
    }

    public function add_vehicule() {
        $page = "admin.vehicule.add-vehicule";
        $title = "Ajouter un véhicule";
        return view("admin.all", compact("page", "title"));
    }

    public function price() {
        $page = "admin.vehicule.price";
        $title = "Les prix";
        return view("admin.all", compact("page", "title"));
    }

    public function edit_classe($id) {
        $category = Category::where('id', $id)->first();
        if($category != null) {
            $page = "admin.vehicule.edit-classe";
            $title = "Classe > ".$category->name;
            $id = $category->id;
            return view("admin.all", compact("page", "title", "id"));
        }
    }

    public function add_classe() {
        $page = "admin.vehicule.add-classe";
        $title = "Ajouter une classe de véhicule";
        return view("admin.all", compact("page", "title"));
    }


}
