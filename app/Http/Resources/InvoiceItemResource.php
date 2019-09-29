<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceItemResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'stockCode' => $this->stockCode,
            'title'=> $this->title,
            'quantity' => $this->quantity,
            'unit'=> $this->unit,
            'unitCost'=> $this->unitCost,
            'supplier_id' => $this->invoice->supplier['id'],
            'po_id' => $this->invoice->procurementOfficer['id'],
        ];
    }
}
