<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function histories()
    {
        return $this->hasMany(History::class);
    }
}
