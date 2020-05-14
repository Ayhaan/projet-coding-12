<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logiciel extends Model
{
    public function portfolios(){  
        return $this->hasMany(Portfolio::class);
     } 
}
