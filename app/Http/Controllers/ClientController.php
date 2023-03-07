<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;

class ClientController extends Controller
{

    public function clients() {
        $page = "admin.client.clients";
        $title = "Liste des clienst";
        return view("admin.all", compact("page", "title"));
    }

    public function client($id) {
        $user = User::where('id', $id)->first();
        if($user != null) {
            $page = "admin.client.client";
            $title = "Client > ".$user->last_name.' '.$user->first_name;
            return view("admin.all", compact("page", "title", "id"));
        }
    }
}
