<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use League\Csv\Reader;
use App\PurchaseOrder;
use App\Invoice;
use App\InvoiceItem;

class ImportPurchaseOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:purchaseOrder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports Purchase Order From CSV';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){
        

        //load the CSV document from a file path
        $csv = Reader::createFromPath('C:\Users\mikee\Desktop\shelter_u_hack\storage\app\customer_data.csv', 'r');
        $csv->setHeaderOffset(0);

        $header = $csv->getHeader(); //returns the CSV header record
        $records = $csv->getRecords(); //returns all the CSV records as an Iterator object

        $data = collect($records)
        ->mapToGroups(function($item,$key){
            return [
                        $item['Invoice'] => [
                            'stockCode' => $item['StockCode'],
                            'title' => $item['Description'],
                            'quantity' => intval($item['Quantity']),
                            'date_created' => $item['InvoiceDate'],
                            'unitCost' => intval($item['Price']),
                            'po_id' => intval($item['Customer ID']),
                            'invoice_id' => intval($item['Invoice']),
                            'unit'=>'kg'
                        ]
                ];
        })
        ->map(function($items,$key){

            return [
                'invoice_no' => $key,
                'po_id' => $items ? $items[0]['po_id'] : null,
                'date_created' => $items ? $items[0]['date_created'] : null,
                'items' => $items,
                'supplier_id'=>rand(0,99)
            ];
        })
        ->each(function($invoice){
            $items = collect($invoice['items']);
            
            $invoice = Invoice::create($invoice);
            
            $items->each(function($item){
                $invoiceItem = InvoiceItem::create($item);
            });

        });
    }
}
