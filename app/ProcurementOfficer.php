<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcurementOfficer extends Model
{
    protected $fillable = [
        'name'
    ];


    public function purchaseOrders(){
        return $this->hasMany(PurchaseOrder::class,'po_id','id');
    }
}
