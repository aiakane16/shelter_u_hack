<?php

namespace App\Http\Controllers;

use App\DeliveryStatus;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;


class DeliveryStatusController extends Controller
{
    protected $deliveryStatus;

    protected $response;

    public function __construct(ResponseFactory $response, DeliveryStatus $deliveryStatus){
       $this->deliveryStatus = $deliveryStatus;
       $this->response = $response;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response->json($this->deliveryStatus->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->response->json($this->deliveryStatus->create($request->all()),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeliveryStatus  $deliveryStatus
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryStatus $deliveryStatus)
    {
        return $this->response->json($deliveryStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeliveryStatus  $deliveryStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryStatus $deliveryStatus)
    {
        return $this->response->json($deliveryStatus->update($request->all()),202);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeliveryStatus  $deliveryStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryStatus $deliveryStatus)
    {
        return $this->response->json($deliveryStatus->delete(),204);        
    }
}
