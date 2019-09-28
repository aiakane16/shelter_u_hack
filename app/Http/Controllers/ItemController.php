<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

class ItemController extends Controller
{
    protected $item;

    protected $response;

    public function __construct(ResponseFactory $response, Item $item){
       $this->item = $item;
       $this->response = $response;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response->json($this->item->all());
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @bodyParam title string required 
     * @bodyParam description string required 
     * @bodyParam quantity int required 
     * @bodyParam unit string required. Example kg
     * @bodyParam unitCost float required. Example 100.00
     * @bodyParam amount float required value is equal to quantity x unitCost
     * @bodyParam po_id Procurement Officer for field prepared by
     * @bodyParam bundle_id optional 
     */
    public function store(Request $request)
    {
        $item = $this->item->create($request->all());
        return $this->response->json($item,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return $this->response->json($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->update($request->all());
        return $this->response->json($item,202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        return $this->response->json(['deleted'=>$item->delete()],204);
    }
}
