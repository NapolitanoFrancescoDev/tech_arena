<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['qty', 'total', 'delivered_at', 'user_id', 'coupon_id'];

    /**
     * Relationship with products (many-to-many).
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * Relationship with user (one-to-one or one-to-many).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship with coupon (one-to-one or one-to-many).
     */
    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
}
