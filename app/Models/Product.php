<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\Purchase;

class Product extends Model
{
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
    public function purchase(){
        return $this->hasMany(Purchase::class);
    }
}
