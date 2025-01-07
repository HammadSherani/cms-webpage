<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class Manager extends Authenticatable
{
    use HasFactory;
    // protected $fillable = ['manager_id', 'name','email','password','first_name','last_name','gender','street','town','city','address', 'phone','cnic','cnic_front','cnic_back','payment_method_id','bank_name','bank_account_title','bank_account_number','bank_branch_city']; 
    protected $guarded = [];
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($manager) {
            // Temporarily skip creating manager_id to prevent conflicts during id generation
        });

        static::created(function ($manager) {
            $baseId = 300; // Base ID from where manager_id starts
            $manager->manager_id = 'LPH-M' . ($baseId + $manager->id);
            $manager->save();
        });
    }
}
