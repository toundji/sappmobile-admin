<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function entreprises() {
        $page = "entreprises";
        $title = "Liste des entreprises";
        return view("admin.allentreprise", compact("page", "title"));
    }

    public function entreprise($id) {
        $entreprise = Entreprise::where('id', $id)->first();
        if($entreprise != null) {
            $user = getUser($entreprise->user_id);
            $page = "entreprise";
            $title = "Entreprise > ".$entreprise->name;
            return view("admin.allentreprise", compact("page", "title", "id"));
        }
    }
}
