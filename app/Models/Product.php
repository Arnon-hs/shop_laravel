<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id')->first();
    }

    public function store()
    {
        return $this->hasOne(Stores::class, 'id', 'store_id')->first();
    }
}
