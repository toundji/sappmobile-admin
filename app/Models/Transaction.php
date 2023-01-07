<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = "transactions";
    protected $guarded = [];


    public function portefeuille(){
        return $this->belongsTo(Portefeuille::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
