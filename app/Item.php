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
        'po_id'
    ];

    public function invoice(){
        return $this->belongsTo(PurchaseOrder::class,'po_id','id');
    }

    public function purchaseRequest(){
        return $this->belongsTo(PurchaseRequest::class,'pr_id','id');
    }
}
