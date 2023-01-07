<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonusController extends Controller
{

    public function bonuses() {
        $page = "bonuses";
        $title = "Liste des clienst qui ont de bonus";
        return view("admin.allbonus", compact("page", "title"));
    }

    public function define_bonus() {
        $page = "define-bonus";
        $title = "Définir bonus";
        return view("admin.allbonus", compact("page", "title"));
    }
}
