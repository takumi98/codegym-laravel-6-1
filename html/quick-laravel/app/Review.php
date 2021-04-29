<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // booksテーブルへの参照
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
