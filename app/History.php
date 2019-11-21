<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
