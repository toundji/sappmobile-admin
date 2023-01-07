<?php

namespace App\Http\Livewire\Admin\Other;

use App\Models\Annonce;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddAnnonce extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $images;
    public $description;

    public function add_annonce() {
        $url = "";
        $urls = "";
        if (!empty($this->image)) {
            $url = env("APP_URL")."/storage/".$this->image->store('annonces', "public");
        }
        if (!empty($this->images)) {
            for ($i=0; $i < count($this->images); $i++) {
                $single_url =  env("APP_URL")."/storage/".$this->images[$i]->store('annonces', "public");
                if(strlen($urls) > 1) {
                    $urls= $urls.";";
                }
                $urls = $urls.$single_url;
            }
        }

        Annonce::create([
            'name' => $this->name,
            'image' => $url,
            'images' => $urls,
            'description' => $this->description,
        ]);

        $this->description = "";
        $this->name = "";
        $this->image = null;
        $this->images = null;

        session()->flash("success", "Annonce ajoutée avec succès");
    }

    public function render()
    {
        return view('livewire.admin.other.add-annonce');
    }
}
