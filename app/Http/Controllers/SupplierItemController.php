<?php

namespace App\Http\Controllers;

use App\SupplierItem;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

class SupplierItemController extends Controller
{

    protected $supplierItem;

    protected $response;

    public function __construct(ResponseFactory $response, SupplierItem $supplierItem){
       $this->supplierItem = $supplierItem;
       $this->response = $response;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response->json($this->supplierItem->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->response->json($this->supplierItem->create($request->all()),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupplierItem  $supplierItem
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierItem $supplierItem)
    {
        return $this->response->json($supplierItem);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupplierItem  $supplierItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupplierItem $supplierItem)
    {
        return $this->response->json($supplierItem->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupplierItem  $supplierItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierItem $supplierItem)
    {
        return $this->response->json($supplierItem->delete(),204);
    }
}
