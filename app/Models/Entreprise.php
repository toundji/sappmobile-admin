<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $table = "entreprises";
    protected $guarded = [];


    public function agent_entreprise(){
        return $this->belongsTo(AgentEntreprise::class);
    }



    public function vehicules(){
        return $this->hasMany(Vehicule::class);
    }


    public function country(){
        return $this->belongsTo(Country::class);
    }
}
