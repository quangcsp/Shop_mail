<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'information',
        'unit_price',
        'rate_count',
        'rate_point',
        'total_quantity',
        'top_product',
        'profile',
    ];

    public function order_detail () {
        return $this->belongsTo(OrderDetail::class);
    }

    public function rate () {
        return $this->hasMany(Rate::class);
    }

    public function image () {
        return $this->hasMany(Image::class);
    }

    public function comment () {
        return $this->hasMany(Comment::class);
    }

    public function category () {
        return $this->belongsTo(Category::class);
    }
}
