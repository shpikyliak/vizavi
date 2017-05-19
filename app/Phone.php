<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function firm()
    {
        return $this->belongsTo(Firm::class);
    }
}
