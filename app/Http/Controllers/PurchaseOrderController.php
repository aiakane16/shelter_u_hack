<?php

namespace App\Http\Controllers;

use App\PurchaseOrder;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

class PurchaseOrderController extends Controller
{
    protected $purchaseOrder;

    protected $response;

    public function __construct(ResponseFactory $response, PurchaseOrder $purchaseOrder){
       $this->purchaseOrder = $purchaseOrder;
       $this->response = $response;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->purchaseOrder->all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->response->json($this->purchaseOrder->create($request->all()),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseOrder $purchaseOrder)
    {
        return $this->response->json($purchaseOrder);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseOrder $purchaseOrder)
    {
        return $this->response->json($purchaseOrder->update($request->all()),202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseOrder $purchaseOrder)
    {
        return $this->response->json(['deleted'=>$purchaseOrder->delete()],204);
    }
}
