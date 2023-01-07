<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class OperationController extends Controller
{

    public function operations($type = "") {
        $page = "operations";
        $title = "Liste des opérations";
        return view("admin.alloperation", compact("page", "title", "type"));
    }

    public function operation($id) {
        $operation = Transport::where('id', $id)->first();
        if($operation != null) {
            $page = "operation";
            $title = "Opération ";
            return view("admin.alloperation", compact("page", "title", "id"));
        }
    }
}
