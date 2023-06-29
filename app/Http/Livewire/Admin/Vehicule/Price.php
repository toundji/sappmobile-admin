<?php

namespace App\Http\Livewire\Admin\Vehicule;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;

class Price extends Component
{

    
    public function delete_category($category_id) {
        Category::where('id', $category_id)->update(['deleted_at' => Carbon::now()]);
    }

    public function render()
    {
        return view('livewire.admin.vehicule.price', [
            "categories" => Category::whereNull('deleted_at')->get()
        ]);
    }
}
