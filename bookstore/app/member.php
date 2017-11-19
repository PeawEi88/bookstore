<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'member';
    protected $fillable = ['memberID','memberCODE','first_name','last_name','birth_date','gender','email','mobile','profile_image'];
    protected $hidden = ['memberCODE'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
