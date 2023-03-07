<?php

namespace App\Http\Livewire\Admin\Conducteur;

use App\Mail\MailSender;
use App\Models\Conducteur as ModelsConducteur;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class Conducteur extends Component
{
    use WithPagination;

    public $user_id;
    public $conducteur_id;
    public $message;
    public $user;

    public function mount($id) {
        $this->conducteur_id = $id;
        $conducteur = ModelsConducteur::find($this->conducteur_id);
        $this->user = $conducteur->user;
    }


    public function block() {
        ModelsConducteur::where("id", $this->conducteur_id)->update(['status' => 0]);

        $details = [
            "subject" => "SAPP MOBILE",
            "title" => "Conducteur SAPP MOBILE",
            "body" => "Désolé ".$this->user->first_name." ".$this->user->last_name." votre compte de conducteur SAPP MOBILE vient d'être bloqué. Veuillez vous rapprochez de nous pour plus d'explication. Merci"
        ];

        Mail::to($this->user->email)->send(new MailSender($details));

        return redirect()->route('admin.conducteur', ['id' => $this->conducteur_id]);
    }


    public function disblock() {
        ModelsConducteur::where("id", $this->conducteur_id)->update(['status' => 1]);

        $details = [
            "subject" => "SAPP MOBILE",
            "title" => "Conducteur SAPP MOBILE",
            "body" => "Félicitation ".$this->user->first_name." ".$this->user->last_name." votre compte de conducteur SAPP MOBILE vient d'être débloqué. Merci"
        ];

        Mail::to($this->user->email)->send(new MailSender($details));

        return redirect()->route('admin.conducteur', ['id' => $this->conducteur_id]);
    }

    public function reject() {
        ModelsConducteur::where("id", $this->conducteur_id)->update(['ask_status' => "REJETE", "message" => $this->message]);

        $details = [
            "subject" => "SAPP MOBILE",
            "title" => "Conducteur SAPP MOBILE",
            "body" => "Désolé ".$this->user->first_name." ".$this->user->last_name." votre demande de devenir conducteur SAPP MOBILE vient d'être rejeté. \n\n <br> Raison :  \n".$this->message.". \n\n Veuillez corriger les erreurs et renvoyer. Merci"
        ];

        Mail::to($this->user->email)->send(new MailSender($details));

        $this->message = "";
        return redirect()->route('admin.conducteurs', ['type' => "REJETE"]);
    }

    public function accept() {
        ModelsConducteur::where("id", $this->conducteur_id)->update(['ask_status' => "APPROUVE"]);

        $details = [
            "subject" => "SAPP MOBILE",
            "title" => "Conducteur SAPP MOBILE",
            "body" => "Félicitation ".$this->user->first_name." ".$this->user->last_name." vous êtes desormais un conducteur SAPP MOBILE. Veuillez vous connectez à votre compte et commencez à recevoir les demandes de Taxi des clients. Merci"
        ];

        Mail::to($this->user->email)->send(new MailSender($details));

        return redirect()->route('admin.conducteur', ['id' => $this->conducteur_id]);
    }


    public function render()
    {
        return view('livewire.admin.conducteur.conducteur', [
            "conducteur" => ModelsConducteur::where("id", $this->conducteur_id)->first()
        ]);
    }
}
