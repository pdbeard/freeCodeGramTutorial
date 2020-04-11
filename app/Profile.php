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

    public function profileImage()
    {
        $imagePath= ($this->image) ? $this->image : 'profile/p02Qb4n8gXyccYSJwA5vzcGF0EPkgUQZDbTfgIa6.png';
        return '/storage/'. $imagePath;
    }


}
