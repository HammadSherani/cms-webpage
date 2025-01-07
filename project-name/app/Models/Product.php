<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = [
    //     'amazon_picture',
    //     'product_picture',
    //     'brand_name',
    //     'keyword',
    //     'amazon_seller_name',
    //     'product_link',
    //     'asin',
    //     'daily_sale_limit',
    //     'overall_sale_limit',
    //     'overall_remaining_sale_limit',
    //     'commission',
    //     'service_fee',
    //     'picture_review_commission',
    //     'refund_conditions',
    //     'commission_conditions',
    //     'instructions',
    //     'manager_id',
    //     'market_id',
    //     'category_id',
    //     'exclusive',
    //     'status'
    // ];

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }
    public function market()
    {
        return $this->belongsTo(Market::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
  
    public function reserves()
    {
        return $this->hasMany(Reserve::class)
            ->where('expire_at', '>', now())
            ->orWhereNotNull('order_created_at');
    }


    public function order()
    {
        return $this->hasMany(Order::class);
    }

    // public function dailySaleLimit() {
    //     return $this-> ($this->reserves()->count() + $this->order->count());
    // }




    public function activeReservation()
    {
        return $this->hasMany(Reserve::class)->where('expire_at', '>', now())->count();
    }
    public function totalOrders()
    {
        return $this->hasMany(Order::class)->count();
    }

    public function availableQuantity()
    {
        return $this->overall_sale_limit - ($this->activeReservation() + $this->totalOrders());
    }

    public function marketerReservation()
    {
        $marketerId = Auth::guard('marketer')->user()->id;
        return $this->hasMany(Reserve::class)->where('marketer_id', $marketerId);
    }


    public function todayAvailables() {
        $activeReservations = Reserve::where('product_id', $this->id)->where('isorder','not_created')->where('expire_at', '>', now())->count();
        $orders = Order::where('product_id', $this->id)->whereDate('created_at', now())->count();
        return $this->daily_sale_limit - ($activeReservations + $orders);
    }
}
