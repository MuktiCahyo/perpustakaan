<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'isbn',
        'published_year',
        'stock',
    ];

    public function authors()
    {
        return $this->belongsToMany(\App\Models\Author::class, 'book_author');
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
}