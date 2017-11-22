<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRent extends Model
{
    protected $table = 'bookrent';
    protected $fillable = ['bookrent_ID','book_ID','member_ID','rent_date','return_date','status','total_cost'];

    public function books()
    {
        return $this->belongsTo('App\Books');
    }
    public function member()
    {
        return $this->hasMany('App\MemBer');
    }
}
