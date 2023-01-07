<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;

class ClientController extends Controller
{

    public function clients() {
        $page = "clients";
        $title = "Liste des clienst";
        return view("admin.allclient", compact("page", "title"));
    }

    public function client($id) {
        $user = User::where('id', $id)->first();
        if($user != null) {
            $page = "client";
            $title = "Client > ".$user->last_name.' '.$user->first_name;
            return view("admin.allclient", compact("page", "title", "id"));
        }
    }
}
