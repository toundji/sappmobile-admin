<?php

namespace App\Http\Controllers;

use App\Models\Constante;
use App\Models\Localisation;
use App\Models\Transport;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view("admin.login");
    }

    public function admin() {
        if(canConnect()) {
            return redirect()->route("admin.clients");
        } else {
            return redirect()->route('login-admin');
        }
    }

    public function setting() {
        $page = "setting";
        $title = "Paramètre";
        return view("admin.all", compact("page", "title"));
    }

    public function cantaccess() {
        return view("cant-access");
    }

    public function informations() {
        session()->forget("success");
        $informations = Constante::where("name", "!=", "ONE_KM__NUMBER_SAPP")->where("name", "!=", "ONE_SAPP__NUMBER_CFA")->get();
        return view("informations", compact("informations"));
    }

    public function p_informations(Request $request) {
        $informations = Constante::where("name", "!=", "ONE_KM__NUMBER_SAPP")->where("name", "!=", "ONE_SAPP__NUMBER_CFA")->get();

        foreach($informations as $information) {
            Constante::where('name', $information['name'])->update(['value' => $request->input($information['name'])]);
        }

        session()->flash('success', "Enregistrer avec succès");

        $informations = Constante::where("name", "!=", "ONE_KM__NUMBER_SAPP")->where("name", "!=", "ONE_SAPP__NUMBER_CFA")->get();

        return view("informations", compact("informations"));
    }


    public function direction($id) {
        $operation = Transport::where('id', $id)->first();
        if($operation != null) {
            $localisation_id_depart = Localisation::where('id', $operation->localisation_id_depart)->first();
            $localisation_id_arrive = Localisation::where('id', $operation->localisation_id_arrive)->first();
            return view("direction", compact("localisation_id_depart", "localisation_id_arrive"));
        }
    }



    /*****************  ACCOUNT  ********* */
    public function right() {
        $page = "right";
        $title = "Tableau de bord";
        return view("admin.all", compact("page", "title"));
    }


    public function disconnect() {
        f_deleteCookie(md5('token_sapp'));
        f_deleteCookie(md5('token_sapp_finance'));
        return redirect()->route('login-admin');
    }
}
