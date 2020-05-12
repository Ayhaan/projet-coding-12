<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    
    public function role(){
        return $this->BelongsTo(Role::class);
    }
}
