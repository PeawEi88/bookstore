<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $table = 'bookcategory';
    protected $fillable = ['bookcategory_ID','Name','bookcategory_TAG'];

    public function books()
    {
        return $this->hasMany('App\Books');
    }
}
