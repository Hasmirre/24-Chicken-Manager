<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasOne(User::class);
    }

    public function order_type() {
        return $this->hasOne(Order_type::class);
    }

    public function promo() {
        return $this->hasOne(Promo::class);
    }
}