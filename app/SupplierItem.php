<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierItem extends Model
{
    protected $fillable = [
        'stockCode',
        'title',
        'quantity',
        'unit',
        'unitCost',
        'supplier_id'
    ];

    public function supplier(){
        return $this->belongsTo(Supplier::class,'supplier_id','id');
    }
}
