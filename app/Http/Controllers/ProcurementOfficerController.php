<?php

namespace App\Http\Controllers;

use App\ProcurementOfficer;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

class ProcurementOfficerController extends Controller
{

    protected $procurementOfficer;

    protected $response;

    public function __construct(ResponseFactory $response, ProcurementOfficer $procurementOfficer){
       $this->procurementOfficer = $procurementOfficer;
       $this->response = $response;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response->json($this->procurementOfficer->all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->response->json($this->procurementOfficer->create($request->all()),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProcurementOfficer  $procurementOfficer
     * @return \Illuminate\Http\Response
     */
    public function show(ProcurementOfficer $procurementOfficer)
    {
        return $this->response->json($procurementOfficer);
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
        return $this->response->json($procurementOfficer->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProcurementOfficer  $procurementOfficer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProcurementOfficer $procurementOfficer)
    {
        return $this->response->json($procurementOfficer->delete());
    }
}
