<?php

namespace App\Http\Livewire\Admin\Vehicule;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditClasse extends Component
{

    use WithFileUploads;

    public $name;
    public $metter_price;
    public $km_price;
    public $caracteristique;
    public $categoryId;
    public $image_category;

    public function mount($id) {
        $this->categoryId = $id;
        $category = Category::where("id", $id)->first();
        $this->name = $category->name;
        $this->metter_price = $category->metter_price;
        $this->km_price = $category->km_price;
        $this->caracteristique = $category->caracteristique;
    }

    public function set_classe() {
        $params = [
            'name' => $this->name,
            "caracteristique" => $this->caracteristique,
            "metter_price" => $this->metter_price,
            "km_price" => $this->km_price
        ];

        $url = "";
        if (!empty($this->image_category)) {
            $url = env("APP_URL")."/storage/".$this->image_category->store('image_categories', "public");
            $params["image_category"] = $url;
        }

        Category::where('id', $this->categoryId)->update($params);

        session()->flash("success", "Moifier avec succès");
    }


    public function render()
    {
        return view('livewire.admin.vehicule.edit-classe');
    }
}
