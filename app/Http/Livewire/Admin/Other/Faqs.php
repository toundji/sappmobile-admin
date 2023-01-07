<?php

namespace App\Http\Livewire\Admin\Other;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class Faqs extends Component
{
    use WithPagination;

    public function delete($id) {
        if(autorisationAuth('faq_delete')) {
            Faq::where('id', $id)->delete();
            return redirect()->route('admin.faqs');
        } else {
            return redirect()->route("cant-access");
        }
    }

    public function render()
    {
        return view('livewire.admin.other.faqs', [
            'faqs' => Faq::where("status", true)->get(),
            'faq1s' => Faq::where("status", false)->get()
        ]);
    }
}
