<?php

namespace App\Http\Livewire\Admin\Vehicule;

use App\Models\Category;
use Livewire\Component;

class Price extends Component
{

    public function render()
    {
        return view('livewire.admin.vehicule.price', [
            "categories" => Category::all()
        ]);
    }
}
