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
        'po_id',
        'bundle_id'
    ];
}
