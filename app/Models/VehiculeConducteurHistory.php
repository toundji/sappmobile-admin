<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehiculeConducteurHistory extends Model
{
    protected $guarded = [];


    public function vehicule(){
        return $this->belongsTo(Vehicule::class, "id_vehicule");
    }


    public function conducteur() {
        return $this->belongsTo(Conducteur::class, "id_conducteur");
    }

}
