<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Conducteur;
use App\Models\UserType;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = 'users';
    protected $guarded = [];


    public function portefeuille() {
        return $this->belongsTo(PorteFeuille::class);
    }

    public function conducteur() {
        return $this->belongsTo(Conducteur::class);
    }

    public function transports() {
        return $this->hasMany(Transport::class, "id");
    }

    public function complices() {
        return $this->hasMany(Complice::class, "id");
    }

    public function enfants() {
        return $this->hasMany(Complice::class, "id");
    }
}
