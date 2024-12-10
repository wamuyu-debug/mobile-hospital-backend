<?php

namespace App\Http\Controllers;

use App\Models\patients;
use App\Http\Requests\StorepatientsRequest;
use App\Http\Requests\UpdatepatientsRequest;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients=patients::all();
        return $doctors;

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
     * @param  \App\Http\Requests\StorepatientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepatientsRequest $request)
    {
        $patient= new Patient;
        $patient->patient_id =$request->patient_id;
        $patient->patient_name =$request->patient_name;
        $patient->patient_age =$request->patient_specialization;
        $patient->patient_contact =$request->patient_contact;

        $patient->save();
        return $patient;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(patients $patients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(patients $patients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepatientsRequest  $request
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepatientsRequest $request, patients $patients)
    {
        $patient=patient::find($request_id);

        $patient= new Patient;
        $patient->patient_id =$request->patient_id;
        $patient->patient_name =$request->patient_name;
        $patient->patient_age =$request->patient_specialization;
        $patient->patient_contact =$request->patient_contact;

        $patient->save();
        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy(patients $patients)
    {
        //
    }
}
