<?php

namespace App\Http\Livewire\Admin\Other;

use App\Models\Publication;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPublication extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $images;
    public $link;
    public $description;

     public function add_publication() {
        $url = "";
        $urls = "";
        if (!empty($this->image)) {
            $url =  env("APP_URL")."/storage/".$this->image->store('publications', "public");
        }
        if (!empty($this->images)) {
            for ($i=0; $i < count($this->images); $i++) {
                $single_url =  env("APP_URL")."/storage/".$this->images[$i]->store('publications', "public");
                if(strlen($urls) > 1) {
                    $urls= $urls.";";
                }
                $urls = $urls.$single_url;
            }
        }

        Publication::create([
            'name' => $this->name,
            'link' => $this->link,
            'image' => $url,
            'images' => $urls,
            'description' => $this->description,
        ]);

        $this->description = "";
        $this->link = "";
        $this->name = "";

        session()->flash("success", "Publication ajoutée avec succès");
    }

    public function render()
    {
        return view('livewire.admin.other.add-publication');
    }
}
