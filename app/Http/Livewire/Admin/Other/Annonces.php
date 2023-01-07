<?php

namespace App\Http\Livewire\Admin\Other;

use App\Models\Annonce;
use Livewire\Component;

class Annonces extends Component
{


    public function delete($id) {
        if(autorisationAuth('annonce_delete')) {
            Annonce::where('id', $id)->delete();
            return redirect()->route('admin.annonces');
        } else {
            return redirect()->route("cant-access");
        }
    }


    public function render()
    {
        return view('livewire.admin.other.annonces', [
            "annonces" => Annonce::all()
        ]);
    }
}

