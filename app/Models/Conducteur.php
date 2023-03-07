<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    use HasFactory;
    protected $table = "conducteurs";


    protected $guarded = [];

    public function vehicule() {
        return $this->belongsTo(Vehicule::class, "id_vehicule");
    }

    public function user() {
        return $this->belongsTo(User::class, "id_user");
    }

    public function transports() {
        return $this->hasMany(Transport::class, "id_conducteur");
    }
}
