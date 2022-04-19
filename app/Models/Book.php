<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    /*protected $with = ['category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['category'] ?? false, fn($query, $category) =>
        $query->whereHas('category', fn ($query) =>
        $query->where('slug', $category)
        )
        );
    }*/


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_book', 'book_id', 'category_id');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
}
