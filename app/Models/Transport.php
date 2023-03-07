<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    protected $table = "transports";
    protected $guarded = [];


    public function arrive(){
        return $this->belongsTo(Localisation::class, "arrive_id");
    }

    public function depart(){
        return $this->belongsTo(Localisation::class, "depart_id");
    }

    public function vehicule(){
        return $this->belongsTo(Vehicule::class, "id_vehicule");
    }

    public function conducteur(){
        return $this->belongsTo(Conducteur::class, "id_conducteur");
    }
    public function user(){
        return $this->belongsTo(User::class, "id_user");
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class, "id_transaction");
    }
}
