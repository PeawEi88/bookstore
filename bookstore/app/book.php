<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'book';
    protected $fillable = ['bookID','bookdetsilID','index_tag'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
