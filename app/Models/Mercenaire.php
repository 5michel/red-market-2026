<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mercenaire extends Personne
{
    public function services(){
        $this->hasMany(Service::class);
    }
}
