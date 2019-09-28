<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name',
    ];

    public function bundles(){
        return $this->hasMany(ItemBundle::class,'supplier_id','id');
    }
}
