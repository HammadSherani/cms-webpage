<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function marketer(){
        return $this->belongsTo(Marketer::class);
    }
    public function manager(){
        return $this->belongsTo(Manager::class);
    }
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
