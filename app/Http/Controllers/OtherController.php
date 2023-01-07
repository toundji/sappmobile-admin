<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Faq;
use App\Models\Publication;
use Illuminate\Http\Request;

class OtherController extends Controller
{

    public function faqs() {
        $page = "faqs";
        $title = "Liste des FAQ";
        return view("admin.allother", compact("page", "title"));
    }

    public function add_faq() {
        $page = "add-faq";
        $title = "Nouvelle FAQ";
        return view("admin.allother", compact("page", "title"));
    }


    public function annonces() {
        $page = "annonces";
        $title = "Liste des annonces";
        return view("admin.allother", compact("page", "title"));
    }

    public function add_annonce() {
        $page = "add-annonce";
        $title = "Nouvelle annonce";
        return view("admin.allother", compact("page", "title"));
    }

    public function annonce($id) {
        $annonce = Annonce::where('id', $id)->first();
        if($annonce != null) {
            $page = "edit-annonce";
            $title = "Annonce > ".$annonce->name;
            return view("admin.allother", compact("page", "title", "id"));
        }
    }



    public function publications() {
        $page = "publications";
        $title = "Liste des publications";
        return view("admin.allother", compact("page", "title"));
    }

    public function add_publication() {
        $page = "add-publication";
        $title = "Nouvelle publication";
        return view("admin.allother", compact("page", "title"));
    }

    public function publication($id) {
        $publication = Publication::where('id', $id)->first();
        if($publication != null) {
            $page = "edit-publication";
            $title = "Publication > ".$publication->name;
            return view("admin.allother", compact("page", "title", "id"));
        }
    }

    public function faq($id) {
        $faq = Faq::where('id', $id)->first();
        if($faq != null) {
            $page = "faq";
            $title = "faq > ".$faq->quiz;
            return view("admin.allother", compact("page", "title", "id"));
        }
    }
}
