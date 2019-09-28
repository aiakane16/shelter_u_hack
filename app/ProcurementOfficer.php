<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcurementOfficer extends Model
{
    protected $fillable = [
        'name'
    ];


    public function purchaseRequests(){
        return $this->hasMany(PurchaseRequest::class,'pr_id','id');
    }
}
