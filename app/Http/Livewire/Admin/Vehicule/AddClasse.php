<?php

namespace App\Http\Livewire\Admin\Vehicule;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddClasse extends Component
{
    use WithFileUploads;

    public $name;
    public $metter_price;
    public $km_price;
    public $caracteristique;
    public $image_category;

    public function add_category() {
        $url = "";
        if (!empty($this->image_category)) {
            $url = env("APP_URL")."/storage/".$this->image_category->store('image_categories', "public");
        }

        Category::create([
            'name' => $this->name,
            "caracteristique" => $this->caracteristique,
            "metter_price" => $this->metter_price,
            "km_price" => $this->km_price,
            "image_category" => $url,
        ]);

        $this->name = "";
        $this->metter_price = "";
        $this->km_price = "";
        $this->caracteristique = "";
        $this->image_category = "";

        session()->flash("success", "Classe de véhicule ajoutée avec succès");
    }


    public function render()
    {
        return view('livewire.admin.vehicule.add-classe');
    }
}
