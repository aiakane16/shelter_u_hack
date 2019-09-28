<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'title',
        'description',
        'quantity',
        'unit',
        'unitCost',
        'amount',
        'pr_id',
        'bundle_id'
    ];

    public function bundle(){
        return $this->belongsTo(ItemBundle::class,'bundle_id','id');
    }

    public function purchaseRequest(){
        return $this->belongsTo(PurchaseRequest::class,'pr_id','id');
    }
}
