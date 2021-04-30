<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['isbn', 'title', 'price', 'publisher', 'published'];
    // a.検証ルールを準備
    public static $rules = [
        'isbn' => 'required',
        'title' => 'required|string|max:10',
        'price' => 'integer|min:0',
        'publisher' => 'required|in:翔泳社,技術評論社,日経BP,秀和システム,インプレス',
        'published' => 'required|date'
    ];

    // reviewsテーブルへの参照
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
