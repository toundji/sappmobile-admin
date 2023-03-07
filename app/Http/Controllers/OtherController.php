<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Faq;
use App\Models\Publication;
use Illuminate\Http\Request;

class OtherController extends Controller
{

    public function faqs() {
        $page = "admin.other.faqs";
        $title = "Liste des FAQ";
        return view("admin.all", compact("page", "title"));
    }

    public function add_faq() {
        $page = "admin.other.add-faq";
        $title = "Nouvelle FAQ";
        return view("admin.all", compact("page", "title"));
    }


    public function annonces() {
        $page = "admin.other.annonces";
        $title = "Liste des annonces";
        return view("admin.all", compact("page", "title"));
    }

    public function add_annonce() {
        $page = "admin.other.add-annonce";
        $title = "Nouvelle annonce";
        return view("admin.all", compact("page", "title"));
    }

    public function annonce($id) {
        $annonce = Annonce::where('id', $id)->first();
        if($annonce != null) {
            $page = "admin.other.edit-annonce";
            $title = "Annonce > ".$annonce->name;
            return view("admin.all", compact("page", "title", "id"));
        }
    }



    public function publications() {
        $page = "admin.other.publications";
        $title = "Liste des publications";
        return view("admin.all", compact("page", "title"));
    }

    public function add_publication() {
        $page = "admin.other.add-publication";
        $title = "Nouvelle publication";
        return view("admin.all", compact("page", "title"));
    }

    public function publication($id) {
        $publication = Publication::where('id', $id)->first();
        if($publication != null) {
            $page = "admin.other.edit-publication";
            $title = "Publication > ".$publication->name;
            return view("admin.all", compact("page", "title", "id"));
        }
    }

    public function faq($id) {
        $faq = Faq::where('id', $id)->first();
        if($faq != null) {
            $page = "admin.other.faq";
            $title = "faq > ".$faq->quiz;
            return view("admin.all", compact("page", "title", "id"));
        }
    }
}
