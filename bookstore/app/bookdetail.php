<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookdetail extends Model
{
    protected $table = 'bookdetail';
    protected $fillable = ['bookdetailID','title','bookcategoryID','authorID','price_per_dau','description','cover_image'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
