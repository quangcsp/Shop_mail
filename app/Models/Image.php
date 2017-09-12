<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'link',
        'status',
    ];

    public function product () {
        return $this->belongTo(Product::class);
    }

}
