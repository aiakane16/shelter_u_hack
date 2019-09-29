<?php

namespace App\Http\Controllers;

use App\ProcurementOfficer;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

class ProcurementOfficerInvoiceController extends Controller
{

    protected $procurementOfficer;

    protected $response;

    public function __construct(ResponseFactory $response, ProcurementOfficer $procurementOfficer){
       $this->supplier = $procurementOfficer;
       $this->response = $response;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProcurementOfficer $procurementOfficer)
    {
        return $this->response->json($procurementOfficer->invoices);
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
     * @param  \App\ProcurementOfficer  $procurementOfficer
     * @return \Illuminate\Http\Response
     */
    public function show(ProcurementOfficer $procurementOfficer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProcurementOfficer  $procurementOfficer
     * @return \Illuminate\Http\Response
     */
    public function edit(ProcurementOfficer $procurementOfficer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProcurementOfficer  $procurementOfficer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProcurementOfficer $procurementOfficer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProcurementOfficer  $procurementOfficer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProcurementOfficer $procurementOfficer)
    {
        //
    }
}
