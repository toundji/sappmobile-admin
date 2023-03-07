<?php

namespace App\Http\Controllers;

use App\Models\Conducteur;
use Illuminate\Http\Request;

class ConducteurController extends Controller
{

    public function conducteurs($type = "APPROUVE") {
        $page = "admin.conducteur.conducteurs";
        $title = "Conducteurs";

        return view("admin.all", compact("page", "title", "type"));
    }


    public function conducteur($id) {
        $conducteur = Conducteur::where('id', $id)->first();
        if($conducteur != null) {
            $user = $conducteur->user;
            $page = "admin.conducteur.conducteur";
            $title = "Conducteur > ".$user->last_name.' '.$user->first_name;
            return view("admin.all", compact("title", "page", "id"));
        }
    }
}
