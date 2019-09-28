<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name',
    ];

    public function items(){
        return $this->hasMany(SUpplierItem::class,'supplier_id','id');
    }

    public function invoices(){
        return $this->hasMany(Invoice::class,'invoice_id','id');
    }
}
