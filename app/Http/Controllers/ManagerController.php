<?php

namespace App\Http\Controllers;

use App\Models\Gestionnaire;
use Illuminate\Http\Request;

class ManagerController extends Controller
{

    /*********  MANAGERS  ***** */
    public function managers() {
        $page = "managers";
        $title = "Les managers";
        return view("admin.allmanager", compact("page", "title"));
    }

    public function add_manager() {
        $page = "add-manager";
        $title = "Ajouter manager";
        return view("admin.allmanager", compact("page", "title"));
    }

    public function manager($id) {
        $manager = Gestionnaire::where('id', $id)->first();
        if($manager != null) {
            $page = "manager";
            $title = "manager > ".$manager->last_name.' '.$manager->first_name;
            return view("admin.allmanager", compact("page", "title", "id"));
        }
    }
}
