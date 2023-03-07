<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class OperationController extends Controller
{

    public function operations($type = "") {
        $page = "admin.operation.operations";
        $title = "Liste des opérations";
        return view("admin.all", compact("page", "title", "type"));
    }

    public function operation($id) {
        $operation = Transport::where('id', $id)->first();
        if($operation != null) {
            $page = "admin.operation.operation";
            $title = "Opération ";
            return view("admin.all", compact("page", "title", "id"));
        }
    }
}
