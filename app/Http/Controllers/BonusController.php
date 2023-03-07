<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonusController extends Controller
{

    public function bonuses() {
        $page = "admin.bonus.bonuses";
        $title = "Liste des clienst qui ont de bonus";
        return view("admin.all", compact("page", "title"));
    }

    public function define_bonus() {
        $page = "admin.bonus.define-bonus";
        $title = "Définir bonus";
        return view("admin.all", compact("page", "title"));
    }
}
