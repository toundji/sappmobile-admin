<?php

namespace App\Http\Livewire\Admin\Other;

use App\Models\Annonce;
use Livewire\Component;

class EditAnnonce extends Component
{
    public $name;
    public $description;
    public $annonceId;

    public function mount($id) {
        $this->annonceId = $id;
        $annonce = Annonce::where('id', $this->annonceId)->first();
        $this->description = $annonce->description;
        $this->name = $annonce->name;
    }


    public function edit_annonce() {
        Annonce::where('id', $this->annonceId)->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        session()->flash("success", "Annonce modifiée avec succès");
    }


    public function render()
    {
        return view('livewire.admin.other.edit-annonce');
    }
}
