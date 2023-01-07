<?php

namespace App\Service;

use App\Models\Client;

class Functions {
    public static function clientExist($id) {
        return Client::where('id', $id)->count() === 1 ? true : false;
    }
}
