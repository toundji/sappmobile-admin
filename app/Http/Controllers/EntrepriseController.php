<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function entreprises() {
        $page = "admin.entreprise.entreprises";
        $title = "Liste des entreprises";
        return view("admin.all", compact("page", "title"));
    }

    public function entreprise($id) {
        $entreprise = Entreprise::where('id', $id)->first();
        if($entreprise != null) {
            $page = "admin.entreprise.entreprise";
            $title = "Entreprise > ".$entreprise->name;
            return view("admin.all", compact("page", "title", "id"));
        }
    }
}
