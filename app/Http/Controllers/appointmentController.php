<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class appointmentController extends Controller
{
    public function index()
    {
        $userAppointments = Appointment::where('u_id', auth()->user()->id)->get();

        return view('yourord', compact('userAppointments'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'appointment_date' => 'required|date',
            'm_number' => 'required|numeric',
        ]);
        $validatedData['status'] = 'pendding';
        $validatedData['u_id'] = Auth::id();
        // Log::debug($validatedData);
        Appointment::create($validatedData);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    public function deleteappo(Request $request)
    {
        $appointmentId = $request->input('id');
        $appointment = Appointment::find($appointmentId);
        // log::debug($appointment);
        if ($appointment) {
            $appointment->delete();
            return redirect()->back()->with('success', 'Appointment deleted successfully');
        }
        return redirect()->back()->with('error', 'Appointment not found');
    }

    public function updateappo(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        // Update appointment details based on form input
        $appointment->name = $request->input('edit_name');
        $appointment->address = $request->input('edit_address');
        $appointment->appointment_date = $request->input('edit_appointment_date');
        $appointment->m_number = $request->input('edit_m_number');

        $appointment->save();
        return redirect()->back()->with('success', 'Appointment Edited successfully');
    }
    function getappointmets()
    {
        $appointment=Appointment::all();
        return view('admin/appointment',['appointment'=>$appointment]);
    }

}
