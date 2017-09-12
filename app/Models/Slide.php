<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'image',
        'status',
    ];

    public function product () {
        return $this->belongsTo(Product::class);
    }
}
