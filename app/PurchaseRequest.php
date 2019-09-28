<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseRequest extends Model
{
    protected $fillable = [
        "po_id",
        "no",
        "date_ordered", // date
        "top", //days
        "warranty", //date
        "date_needed",
        "remarks",
        "delivery_address"
    ];

    public function items(){
        return $this->hasMany(Item::class,'pr_id','id');
    }

    public function preparedBy(){
        return $this->belongsTo(ProcurementOfficer::class,'po_id','id');
    }

    public function getTotalValue(){
        return $this->items->sum('unitCost');
    }

}