<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookrent extends Model
{
    protected $table = 'bookrent';
    protected $fillable = ['bookrentID','bookID','memberID','rent_date','return_date','status','total_cost'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
