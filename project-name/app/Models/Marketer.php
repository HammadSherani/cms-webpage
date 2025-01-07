<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;


class Marketer extends Authenticatable
{
    use HasFactory;
    // protected $fillable = ['marketer_id', 'name','email','password','first_name','last_name','gender','street','town','city','address', 'phone','cnic','cnic_front','cnic_back','payment_method_id','bank_name','bank_account_title','bank_account_number','bank_branch_city']; 
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
    
        });
    
        static::created(function ($marketer) {
            $baseId = 700; // Base ID from where marketer_id starts
            $marketer->marketer_id = 'LPH-' . ($baseId + $marketer->id);
            $marketer->save();
        });
    
    }
    
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
