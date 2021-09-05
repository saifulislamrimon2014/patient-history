<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|min:11|max:11',
            'gender' => 'required|string',
            'religion' => 'required|string',
            'marritial_status' => 'required|string',
            'email' => 'required|string',
        ]);

        $get_appointment = new Appointment();
        $get_appointment->name = $request->name;
        $get_appointment->phone = $request->phone;
        $get_appointment->gender = $request->gender;
        $get_appointment->religion = $request->religion;
        $get_appointment->marritial_status = $request->marritial_status;
        $get_appointment->email = $request->email;
        $get_appointment->status = false;
        $get_appointment->save();
        return redirect()->back()->with('success', 'You have successfully booked an appointment! Please wait, you will get notified after approval. Thank you!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
