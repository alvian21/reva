<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lifeplan extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
