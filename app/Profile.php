<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = ['bio','facebook','github','web'];

    public function user()
    {
        return $this->belongsTo('App\User','u_id');
    }
}
