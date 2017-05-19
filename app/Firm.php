<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    public function phones()
    {
        return $this->hasMany(Phone::class);
    }


}
