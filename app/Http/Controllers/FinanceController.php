<?php

namespace App\Http\Controllers;

use App\Models\Conducteur;
use App\Models\Entreprise;
use App\Models\User;
use App\Models\Vehicule;

class FinanceController extends Controller
{
    public function login() {
        $type = "finance";
        return view("admin.login", compact("type"));
    }

    public function generals($type) {
        $page = "generals";
        $title = "Gain générales";
        return view("finance.all", compact("page", "title", "type"));
    }

    public function conducteurs($type) {
        $page = "conducteurs";
        $title = "Liste des conducteurs";
        return view("finance.all", compact("page", "title", "type"));
    }

    public function conducteur($id, $type) {
        $conducteur = Conducteur::where('id', $id)->first();
        if($conducteur != null) {
            $page = "conducteur";
            $title = "Gain conducteurs > ".$conducteur->user->last_name.' '.$conducteur->user->first_name;
            return view("finance.all", compact("title", "type", "page", "id"));
        }
    }


    public function vehicules($type) {
        $page = "vehicules";
        $title = "Gain véhicules";
        return view("finance.all", compact("page", "title", "type"));
    }

    public function vehicule($id, $type) {
        $vehicule = Vehicule::where('id', $id)->first();
        if($vehicule != null) {
            $page = "vehicule";
            $title = "Gain véhicules > ".$vehicule->matricule;
            $id = $vehicule->id;
            return view("finance.all", compact("page", "type", "title", "id"));
        }
    }


    public function entreprises($type) {
        $page = "entreprises";
        $title = "Gain entreprises";
        return view("finance.all", compact("page", "title", "type"));
    }

    public function entreprise($id, $type) {
        $entreprise = Entreprise::where('id', $id)->first();
        if($entreprise != null) {
            $page = "entreprise";
            $title = "Gain entreprises > ".$entreprise->name;
            return view("finance.all", compact("page", "type", "title", "id"));
        }
    }


    public function clients($type) {
        $page = "clients";
        $title = "Gain clients";
        return view("finance.all", compact("page", "title", "type"));
    }

    public function client($id, $type) {
        $user = User::where('id', $id)->first();
        if($user != null) {
            $page = "client";
            $title = "Gain clients > ".$user->last_name.' '.$user->first_name;
            return view("finance.all", compact("page", "type", "title", "id"));
        }
    }



    public function disconnect() {
        f_deleteCookie(md5('token_sapp'));
        f_deleteCookie(md5('token_sapp_finance'));
        return redirect()->route('login-finance');
    }

}
