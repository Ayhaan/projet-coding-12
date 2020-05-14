<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    public function logiciel(){
        return $this->BelongsTo(Logiciel::class);
    }
}
