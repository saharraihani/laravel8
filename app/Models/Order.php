<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user() {
        return $this->belongsTo(related: User::class);
    }

    public function orderItem() {
        return $this->hasMany(related: orderItem::class);
    }

    public function products() {
        return $this->belongsToMany(related: Product::class, table: 'order_item');
    }
}
