<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookcategory extends Model
{
    protected $table = 'bookcategory';
    protected $fillable = ['bookcategoryID','bookcategoryNAME','bookcategoryTAG'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
