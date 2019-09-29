<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryStatus extends Model
{
    protected $fillable = [
        'name',
        'invoice_id'
    ];

    public function invoice(){
        return $this->belongsTo(Invoice::class,'invoice_id','id');
    }
}
