<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = [
        'supplier_id',
        'top',
        'warranty',
        'date_needed',
        'delivery_address'
    ];

    public function items(){
        return $this->hasMany(Item::class,'po_id','id');
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class,'supplier_id','id');
    }
}
