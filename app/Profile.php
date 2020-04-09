<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //fix fillable error
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
