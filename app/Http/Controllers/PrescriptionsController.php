<?php

namespace App\Http\Controllers;

use App\Models\prescriptions;
use App\Http\Requests\StoreprescriptionsRequest;
use App\Http\Requests\UpdateprescriptionsRequest;

class PrescriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = prescriptions::all();
        return $prescriptions;
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
     * @param  \App\Http\Requests\StoreprescriptionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprescriptionsRequest $request)
    {
        $prescription = new Prescription;
        $prescription->prescription_id = $request->prescription_id;
        $prescription->date_issued = $request->date_issued;
        $prescription->expiration_date = $request->expitarion_date;

        $payment=save();
        return $payment;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function show(prescriptions $prescriptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function edit(prescriptions $prescriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprescriptionsRequest  $request
     * @param  \App\Models\prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprescriptionsRequest $request, prescriptions $prescriptions)
    {

        $prescription = new Prescription;
        $prescription->prescription_id = $request->prescription_id;
        $prescription->date_issued = $request->date_issued;
        $prescription->expiration_date = $request->expitarion_date;

        $payment=save();
        return $payment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function destroy(prescriptions $prescriptions)
    {
        //
    }
}
