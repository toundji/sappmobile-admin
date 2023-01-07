<?php

namespace App\Http\Livewire\Admin\Other;

use App\Models\Faq as ModelsFaq;
use Livewire\Component;

class Faq extends Component
{
    public $quiz;
    public $response;
    public $faqId;

    public function mount($id) {
        $this->faqId = $id;
        $faq = ModelsFaq::where('id', $this->faqId)->first();
        $this->response = $faq->response;
        $this->quiz = $faq->quiz;
    }


    public function edit_faq() {
        ModelsFaq::where('id', $this->faqId)->update([
            'quiz' => $this->quiz,
            'response' => $this->response,
            "status" => strlen($this->response) > 0
        ]);

        session()->flash("success", "FAQ modifiée avec succès");
    }

    public function render()
    {
        return view('livewire.admin.other.faq');
    }
}
