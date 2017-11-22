<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'book';
    protected $fillable = ['book_ID','bookdetsil_ID','index_tag'];

    public function category()
    {
        return $this->belongsTo('App\BookCategory');
    }
}
