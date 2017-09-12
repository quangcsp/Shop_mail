<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
        'point',
    ];

    public function product () {
        return $this->belongsTo(Product::class);
    }
}
