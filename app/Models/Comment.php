<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment_parent_id',
        'content',
    ];

    public function product () {
        return $this->belongsTo(Product::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }
}