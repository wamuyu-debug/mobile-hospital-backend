<?php

namespace App\Http\Controllers;

use App\Models\doctors;
use App\Http\Requests\StoredoctorsRequest;
use App\Http\Requests\UpdatedoctorsRequest;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = auth()->user(); // Ensure the doctor is authenticated
        $appointments = $doctor->appointments()->with('patient')->orderBy('appointment_date', 'asc')->get();
    
        return view('doctor.dashboard', compact('appointments'));
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
     * @param  \App\Http\Requests\StoredoctorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
                $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:8',
                    'phone' => 'required|string|max:255',
                    'user_type' => 'required|string|max:255',
                ]);

                $user = Doctors::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'phone' => $request->phone,
                    'user_type' => $request->user_type,
                    
                ]);

                return response()->json([
                    'user' => $user,
                    'token' => $user->createToken('token-name')->plainTextToken,
                ], 201);
    }
    public function store(StoredoctorsRequest $request)
    {
        $doctor = new Doctor;
        $doctor->doctor_id =$request->doctor_id;
        $doctor->doctor_name =$request->doctor_name;
        $doctor->doctor_specialization =$request->doctor_specialization;
        $doctor->doctor_contact =$request->doctor_contact;

        $doctor->save();
        return $doctor;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function show(doctors $doctors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function edit(doctors $doctors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedoctorsRequest  $request
     * @param  \App\Models\doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedoctorsRequest $request, doctors $doctors)
    {
        $doctor= doctor::find($request_id);
        $doctor = new Doctor;
        $doctor->doctor_id =$request->doctor_id;
        $doctor->doctor_name =$request->doctor_name;
        $doctor->doctor_specialization =$request->doctor_specialization;
        $doctor->doctor_contact =$request->doctor_contact;

        $doctor->save();
        return $doctor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function destroy(doctors $doctors)
    {
        //
    }
}
