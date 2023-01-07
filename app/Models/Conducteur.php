<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    use HasFactory;
    protected $table = "conducteurs";


    protected $guarded = [];

    public function vehicules() {
        return $this->hasMany(Vehicule::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function transports() {
        return $this->hasMany(Transport::class);
    }
}
