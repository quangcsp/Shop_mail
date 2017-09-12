<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'name',
        'category_parent_id',
    ];
    public $timestamps = false;

    public function product () {
        return $this->hasMany(Product::class);
    }
}
