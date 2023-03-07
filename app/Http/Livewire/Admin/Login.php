<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gestionnaire;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $type;

    public function mount($type) {
        $this->type = $type;
    }

    protected $rules = [
        'password' => 'required|min:4',
        'email' => 'required|email',
    ];

    protected $messages = [
        'email.required' => 'Veuillez donner votre email.',
        'email.email' => 'Email invalide.',
        'password.required' => 'Veuillez donner votre mot de passe.',
        'password.min' => 'Au moins 6 caractères.',
    ];

    public function updated($propertyName)
    {
        session()->forget("message");
        $this->validateOnly($propertyName);
    }

    public function login() {
        $this->validate();

        if ($this->type === "finance") {
            $admin = Gestionnaire::where('email', $this->email)->first();
            if($admin !== null) {
                if(Hash::check($this->password, $admin->password) && autorisationAuth("finance", $admin->id)) {
                    f_setCookie(md5('token_sapp'), $admin->id);
                    f_setCookie(md5('token_sapp_finance'), $admin->id);

                    return redirect()->route('finance.generals', ["type" => "day"]);
                } else {
                    session()->flash('message', "Email ou Mot de passe incorrect");
                }
            } else {
                session()->flash('message', "Email ou Mot de passe incorrect");
            }
        } else {
            $admin = Gestionnaire::where('email', $this->email)->first();
            if($admin !== null) {
                if(Hash::check($this->password, $admin->password)) {
                    f_setCookie(md5('token_sapp'), $admin->id);

                    return redirect()->route('admin.clients');
                } else {
                    session()->flash('message', "Email ou Mot de passe incorrect");
                }
            } else {
                session()->flash('message', "Email ou Mot de passe incorrect");
            }
        }

    }


    public function render()
    {
        return view('livewire.admin.login');
    }
}
