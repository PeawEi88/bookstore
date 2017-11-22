<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookDetail extends Model
{
    protected $table = 'bookdetail';
    protected $fillable = ['bookdetail_ID','title','bookcategory_ID','author_ID','price_per_dau','description','cover_image'];

    public function author()
    {
        return $this->hasMany('App\Author');
    }
    public function Category()
    {
        return $this->hasMany('App\BookCategory');
    }
}
