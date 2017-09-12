<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'type',
        'name',
    ];

    public function order () {
        return $this->belongsTo(Order::class);
    }
}
