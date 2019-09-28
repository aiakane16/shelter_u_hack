<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'date_created',
        'po_id',
        'invoice_no',
        'supplier_id'
    ];

    public function items(){
        return $this->hasMany(InvoiceItem::class,'invoice_id','id');
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class,'supplier_id','id');
    }
}
