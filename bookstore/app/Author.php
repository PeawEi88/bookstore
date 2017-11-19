<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'Author';
    protected $fillable = ['authorID','first_name','last_name','email','birth_date','gender','image'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
