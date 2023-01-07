<?php

namespace App\Http\Controllers;

use App\Models\Conducteur;
use Illuminate\Http\Request;

class ConducteurController extends Controller
{

    public function conducteurs($type = "approved") {
        $page = "conducteurs";
        $title = "Conducteurs";

        return view("admin.allconducteur", compact("page", "title", "type"));
    }


    public function conducteur($id) {
        $conducteur = Conducteur::where('id', $id)->first();
        if($conducteur != null) {
            $user = getUser($conducteur->user_id);
            $page = "conducteur";
            $title = "Conducteur > ".$user->last_name.' '.$user->first_name;
            $user_id = $conducteur->user_id;
            return view("admin.allconducteur", compact("title", "page", "id"));
        }
    }
}
