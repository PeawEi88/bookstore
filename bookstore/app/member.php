<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemBer extends Model
{
    protected $table = 'member';
    protected $fillable = ['member_ID','member_CODE','first_name','last_name','birth_date','gender','email','mobile','profile_image'];


    public function bookrent()
    {
        return $this->hasMany('App\BookRent');
    }
}
