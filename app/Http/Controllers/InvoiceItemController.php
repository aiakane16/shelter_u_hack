<?php

namespace App\Http\Controllers;

use App\InvoiceItem;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;


class InvoiceItemController extends Controller
{

    protected $invoiceItem;

    protected $response;

    public function __construct(ResponseFactory $response, InvoiceItem $invoiceItem){
       $this->invoiceItem = $invoiceItem;
       $this->response = $response;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response->json($this->invoiceItem->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InvoiceItem  $invoiceItem
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceItem $invoiceItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InvoiceItem  $invoiceItem
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceItem $invoiceItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InvoiceItem  $invoiceItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvoiceItem $invoiceItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InvoiceItem  $invoiceItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceItem $invoiceItem)
    {
        //
    }
}
