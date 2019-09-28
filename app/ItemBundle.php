<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemBundle extends Model
{
    protected $fillable = [
        'supplier_id'
    ];

    public function items(){
        return $this->hasMany(Item::class,'bundle_id','id');
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class,'supplier_id','id');
    }
}
