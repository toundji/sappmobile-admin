<?php

namespace App\Http\Livewire\Admin\Other;

use App\Models\Publication;
use Livewire\Component;

class EditPublication extends Component
{
    public $name;
    public $link;
    public $description;
    public $publicationId;

    public function mount($id) {
        $this->publicationId = $id;
        $publication = Publication::where('id', $this->publicationId)->first();
        $this->description = $publication->description;
        $this->name = $publication->name;
        $this->link = $publication->link;
    }


    public function edit_publication() {
        Publication::where('id', $this->publicationId)->update([
            'name' => $this->name,
            'link' => $this->link,
            'description' => $this->description,
        ]);

        session()->flash("success", "Publication modifiée avec succès");
    }


    public function render()
    {
        return view('livewire.admin.other.edit-publication');
    }
}
