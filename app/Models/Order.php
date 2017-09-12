<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'phone',
        'email',
        'name',
        'total_price',
        'address',
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function paymet () {
        return $this->belongsTo(Payment::class);
    }

    public function order_detail () {
        return $this->hasMany(OrderDetail::class);
    }
}
