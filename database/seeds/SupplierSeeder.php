<?php

use Illuminate\Database\Seeder;
use App\Supplier;
use App\Invoice;
use App\InvoiceItem;
use App\SupplierItem;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Supplier::class,100)->create()->each(function($supplier){
            $invoiceItems = InvoiceItem::all()
            ->random(10)
            ->map(function($item){
                return [
                    'stockCode' => $item->stockCode,
                    'title'=> $item->title,
                    'quantity' => $item->quantity,
                    'unit' => $item->unit,
                    'unitCost' => $item->unitCost,
                    'supplier_id' => $item->supplier_id
                ];
            })
            ->mapInto(SupplierItem::class);
            $supplier->items()->saveMany($invoiceItems);
        });
    }
}
