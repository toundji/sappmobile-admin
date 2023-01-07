<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gestionnaire;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Setting extends Component
{
    public $email;
    public $password;
    public $newPassword;
    public $lastPassword;

    public function setEmail() {
        if(!empty($this->email) && !empty($this->password)) {
            $admin = Gestionnaire::where('id', f_getCookie(md5('token_sapp')))->first();
            if(Hash::check($this->password, $admin->password)) {
                Gestionnaire::where('id', f_getCookie(md5('token_sapp')))->update(['email' => $this->email]);
                $this->email = "";
                $this->password = "";
                session()->flash('success1', "Modification effectuée avec succès");
            } else {
                session()->flash('error1', "Mot de passe incorrect");
            }
        }
    }

    public function setPassword() {
        if(!empty($this->newPassword) && !empty($this->lastPassword)) {
            $admin = Gestionnaire::where('id', f_getCookie(md5('token_sapp')))->first();
            if(Hash::check($this->lastPassword, $admin->password)) {
                Gestionnaire::where('id', f_getCookie(md5('token_sapp')))->update(['password' => Hash::make($this->newPassword)]);
                $this->lastPassword = "";
                $this->newPassword = "";
                session()->flash('success2', "Modification effectuée avec succès");
            } else {
                session()->flash('error2', "Mot de passe incorrect");
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.setting', [
            "admin" => Gestionnaire::where('id', f_getCookie(md5('token_sapp')))->first()
        ]);
    }
}
