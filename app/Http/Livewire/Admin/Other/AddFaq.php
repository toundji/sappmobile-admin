<?php

namespace App\Http\Livewire\Admin\Other;

use App\Models\Faq;
use Livewire\Component;

class AddFaq extends Component
{
    public $quiz;
    public $response;


    public function add_faq() {
        Faq::create([
            'quiz' => $this->quiz,
            'response' => $this->response,
            "status" => strlen($this->response) > 0
        ]);

        $this->response = "";
        $this->quiz = "";

        session()->flash("success", "FAQ ajoutée avec succès");
    }


    public function render()
    {
        return view('livewire.admin.other.add-faq');
    }
}
