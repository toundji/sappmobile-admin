<?php

namespace App\Http\Livewire\Admin\Manager;

use App\Mail\MailSender;
use App\Models\Gestionnaire;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class AddManager extends Component
{
    public $last_name;
    public $first_name;
    public $email;

    public function add_manager() {

        if(Gestionnaire::where('email', $this->email)->count() === 0) {
            $password = generateRandomString();
            Gestionnaire::create([
                "last_name" => $this->last_name,
                "first_name" => $this->first_name,
                "email" => $this->email,
                "password" => Hash::make($password)
            ]);

            $details = [
                "subject" => "SAPP MOBILE",
                "title" => "Manager SAPP MOBILE",
                "body" => "Félicitation ".$this->first_name." ".$this->last_name." vous êtes un nouveau manager de SAPP MOBILE. Veuillez vous connectez à votre compte à l'adresse <a href='".env("APP_URL")."/".env("ADMIN_URL")."'>".env("APP_URL")."/".env("ADMIN_URL")."</a> avec ces identifiants. Email: ".$this->email. " Mot de passe: ".$password." Merci, Cordialement."
            ];

            Mail::to($this->email)->send(new MailSender($details));

            $this->last_name = "";
            $this->first_name = "";
            $this->email = "";

            session()->flash('success', 'Manager ajouté avec succès ');
        } else {
            session()->flash('error', 'Un manager a déjà ce mail.');
        }
    }

    public function render()
    {
        return view('livewire.admin.manager.add-manager');
    }
}
