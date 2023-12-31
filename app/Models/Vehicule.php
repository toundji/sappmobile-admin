<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $table = 'vehicules';
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class, "id_category");
    }


    public function entreprise(){
        return $this->belongsTo(Entreprise::class, "id_entreprise");
    }


    public function conducteur() {
        return $this->belongsTo(Conducteur::class, "id_conducteur");
    }
}
