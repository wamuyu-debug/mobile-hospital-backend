<?php

namespace App\Http\Controllers;

use App\Models\appointments;
use App\Http\Requests\StoreappointmentsRequest;
use App\Http\Requests\UpdateappointmentsRequest;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = appointments::all();
        return $appointments;

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
     * @param  \App\Http\Requests\StoreappointmentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreappointmentsRequest $request)
    {
        $appointments = new Appointments;
        $appointments->appoitment_date =$request->appointment_date;
        $appointments->appoitment_time =$request->appointment_time;
        $appointments->appoitment_type =$request->appointment_type;

        $appointments->save();
        return $appointments;
    }

    /**
     * 
     * Display the specified resource.
     *
     * @param  \App\Models\appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show(appointments $appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function edit(appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateappointmentsRequest  $request
     * @param  \App\Models\appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateappointmentsRequest $request, appointments $appointments)
    {
        $appointments = appointment::find ($request->id);

        $appointments = new Appointments;
        $appointments->appoitment_date =$request->appointment_date;
        $appointments->appoitment_time =$request->appointment_time;
        $appointments->appoitment_type =$request->appointment_type;

        $appointments->save();
        return $appointments;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointments $appointments)
    {
        //
    }
}
