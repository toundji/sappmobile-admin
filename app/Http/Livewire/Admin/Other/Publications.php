<?php

namespace App\Http\Livewire\Admin\Other;

use App\Models\Publication;
use Livewire\Component;

class Publications extends Component
{


    public function delete($id) {
        if(autorisationAuth('publication_delete')) {
            Publication::where('id', $id)->delete();
            return redirect()->route('admin.publications');
        } else {
            return redirect()->route("cant-access");
        }
    }

    public function render()
    {
        return view('livewire.admin.other.publications', [
            "publications" => Publication::all()
        ]);
    }
}

