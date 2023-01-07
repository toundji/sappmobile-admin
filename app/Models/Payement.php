<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;
    protected $table = "payements";
    protected $guarded = [];

    public function Portefeuille(){
        return $this->belongsTo(Portefeuille::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
