<?php

use Illuminate\Http\Request;

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

Route::apiResource('supplier','SupplierController');

Route::apiResource('supplierItem','SupplierItemController');

Route::apiResource('supplier.item','SupplierSupplierItemController');

Route::apiResource('invoice','InvoiceController');

Route::apiResource('invoiceItem','InvoiceItemController');






