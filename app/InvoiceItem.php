<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $fillable = [
        'stockCode',
        'title',
        'quantity',
        'unitCost',
        'invoice_id'
    ];

    public function invoice(){
        return $this->belongsTo(Invoice::class,'invoice_id','id');
    }

    
}