<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complice extends Model
{
    use HasFactory;

    protected $table = "complices";

    protected $guarded = [];


    public function user() {
        return $this->belongsTo(User::class, "id_user");
    }

    public function parent() {
        return $this->belongsTo(User::class, "parent_id");
    }

}
