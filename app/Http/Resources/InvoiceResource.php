<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
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
            'id' => $this->id
        ];
        // return collect($this->toArray)
        // ->flatMap(function($invoice){
        //     return collect($invoice['items'])
        //         ->map(function($item){
        //             return [
        //                 'id' => $item['id'],
        //                 'stockCode' => $item['stockCode'],
        //                 'title'=> $item['title'],
        //                 'quantity' => $item['quantity'],
        //                 'unit'=> $item['unit'],
        //                 'unitCost'=> $item['unitCost'],
        //                 'supplier_id' => $item['supplier']['id']
        //             ];
        //         });
            
        // }); 
    }
}
