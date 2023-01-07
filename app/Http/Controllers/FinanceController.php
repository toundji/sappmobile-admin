<?php

namespace App\Http\Controllers;

use App\Models\Conducteur;
use App\Models\Entreprise;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function general($type) {
        $page = "generals";
        $title = "Gain générales";
        return view("admin.finance", compact("page", "title", "type"));
    }


    public function clients($type) {
        $page = "clients";
        $title = "Gain clients";
        return view("admin.finance", compact("page", "title", "type"));
    }


    public function conducteurs($type) {
        $page = "conducteurs";
        $title = "Gain conducteurs";
        return view("admin.finance", compact("page", "title", "type"));
    }


    public function vehicules($type) {
        $page = "vehicules";
        $title = "Gain véhicules";
        return view("admin.finance", compact("page", "title", "type"));
    }


    public function entreprises($type) {
        $page = "entreprises";
        $title = "Gain entreprises";
        return view("admin.finance", compact("page", "title", "type"));
    }



    public function client($id) {
        $user = User::where('id', $id)->first();
        if($user != null) {
            $page = "client";
            $title = "Gain clients > ".$user->last_name.' '.$user->first_name;
            return view("admin.finance", compact("page", "title", "id"));
        }
    }

    public function conducteur($id) {
        $conducteur = Conducteur::where('id', $id)->first();
        if($conducteur != null) {
            $user = getUser($conducteur->user_id);
            $page = "conducteur";
            $title = "Gain conducteurs > ".$user->last_name.' '.$user->first_name;
            $user_id = $conducteur->user_id;
            return view("admin.finance", compact("title", "page", "id"));
        }
    }


    public function vehicule($id) {
        $vehicule = Vehicule::where('id', $id)->first();
        if($vehicule != null) {
            $page = "vehicule";
            $title = "Gain véhicules > ".$vehicule->matricule;
            $id = $vehicule->id;
            return view("admin.finance", compact("page", "title", "id"));
        }
    }

    public function entreprise($id) {
        $entreprise = Entreprise::where('id', $id)->first();
        if($entreprise != null) {
            $user = getUser($entreprise->user_id);
            $page = "entreprise";
            $title = "Gain entreprises > ".$entreprise->name;
            return view("admin.finance", compact("page", "title", "id"));
        }
    }

}
