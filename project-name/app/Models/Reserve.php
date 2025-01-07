<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','marketer_id','manager_id','expire_at','isorder'];

    public function marketer() {
        return $this->belongsTo(Marketer::class);
    }
    public function manager() {
        return $this->belongsTo(Manager::class);
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
