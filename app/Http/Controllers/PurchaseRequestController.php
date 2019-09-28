<?php

namespace App\Http\Controllers;

use App\PurchaseRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

class PurchaseRequestController extends Controller
{
    protected $purchaseRequest;

    protected $response;

    public function __construct(ResponseFactory $response, PurchaseRequest $purchaseRequest){
       $this->purchaseRequest = $purchaseRequest;
       $this->response = $response;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->purchaseRequest->all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->response->json($this->purchaseRequest->create($request->all()),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseRequest  $purchaseRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseRequest $purchaseRequest)
    {
        return $this->response->json($purchaseRequest->load('items','preparedBy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseRequest  $purchaseRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseRequest $purchaseRequest)
    {
        return $this->response->json($purchaseRequest->update($request->all()),202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseRequest  $purchaseRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseRequest $purchaseRequest)
    {
        return $this->response->json(['deleted'=>$purchaseRequest->delete()],204);
    }
}
