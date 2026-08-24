<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'cover_image', 'display_order', 'featured', 'active'
    ];

    public function products()
    {
        return $this->hasMany(Product::class)->orderBy('display_order');
    }
}
