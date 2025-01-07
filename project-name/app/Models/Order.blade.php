<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    // Generate unique order number when creating a new order
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            // Example logic to generate unique order number (you can customize this)
            $order->order_no = mt_rand(200000, 209999); // Random 6-digit number
        });
    }
    // Define the relationship with the Product model
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function market()
    {
        return $this->belongsTo(Market::class, 'market_id');
    }
    public function marketer()
    {
        return $this->belongsTo(Marketer::class, 'marketer_id');
    }

    public function manager()
{
    return $this->belongsTo(Manager::class, 'manager_id', 'id'); // 'manager_id' is the foreign key in orders
}

    public function reserve() {
        return $this->belongsTo(Reserve::class);
    }
}
