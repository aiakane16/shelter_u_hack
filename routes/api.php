<?php

use Illuminate\Http\Request;
use App\Invoice;
use App\InvoiceItem;
use App\ProcurementOfficer;
use App\Http\Resources\InvoiceItemResource;
use App\Http\Resources\InvoiceResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('item','ItemController');

Route::apiResource('purchaseRequest','PurchaseRequestController');

Route::apiResource('procurementOfficer','ProcurementOfficerController');

Route::apiResource('procurementOfficer.invoice','ProcurementOfficerInvoiceController');

Route::apiResource('supplier','SupplierController');

Route::apiResource('supplierItem','SupplierItemController');

Route::apiResource('supplier.item','SupplierSupplierItemController');

Route::apiResource('invoice','InvoiceController');

Route::apiResource('invoiceItem','InvoiceItemController');

Route::get('/data/{po}', function(Request $request,ProcurementOfficer $po){
    dd($po->invoices);
    return InvoiceResource::collection($po->invoices);
});

Route::get('/data', function(Request $request){
    return InvoiceItemResource::collection(InvoiceItem::all()->load('invoice.supplier','invoice.procurementOfficer'));
});





