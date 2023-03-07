<?php

namespace App\Http\Controllers;

use App\Models\Gestionnaire;
use Illuminate\Http\Request;

class ManagerController extends Controller
{

    /*********  MANAGERS  ***** */
    public function managers() {
        $page = "admin.manager.managers";
        $title = "Les managers";
        return view("admin.all", compact("page", "title"));
    }

    public function add_manager() {
        $page = "admin.manager.add-manager";
        $title = "Ajouter manager";
        return view("admin.all", compact("page", "title"));
    }

    public function manager($id) {
        $manager = Gestionnaire::where('id', $id)->first();
        if($manager != null) {
            $page = "admin.manager.manager";
            $title = "manager > ".$manager->last_name.' '.$manager->first_name;
            return view("admin.all", compact("page", "title", "id"));
        }
    }
}
