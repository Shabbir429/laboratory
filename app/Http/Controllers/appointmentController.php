<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
            'phone' => 'required|numeric',
        ]);
        $validatedData['u_id'] = Auth::id();
        Appointment::create($validatedData);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    public function deleteappo(Request $request)
    {
        $appointmentId = $request->input('id');
        $appointment = Appointment::find($appointmentId);
        if ($appointment) {
            $appointment->delete();
            return redirect()->back()->with('success', 'Appointment deleted successfully');
        }
        return redirect()->back()->with('error', 'Appointment not found');
    }

    public function updateappo(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($request->input('edit_id'));
        $appointment->name = $request->input('edit_name');
        $appointment->address = $request->input('edit_address');
        $appointment->appointment_date = $request->input('edit_appointment_date');
        $appointment->phone = $request->input('edit_phone');
        $appointment->save();
        return redirect()->back()->with('success', 'Appointment Edited successfully');
    }
    function getappointmets()
    {
        $appointment = Appointment::all();
        return view('admin/appointment', ['appointment' => $appointment]);
    }
    function todayappointmets()
    {
        $appointment = Appointment::whereDate('created_at', now())->get();
        log::debug($appointment);
        return view('admin/appointment', ['appointment' => $appointment]);
    }

    function upload(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        $appointment = Appointment::findOrFail($id);
        $file = $request->file('file');
        $fileName = time() . '.' . $file->extension();
        $destinationPath = 'upload/';
        $filepath = $file->move($destinationPath, $fileName);

        $appointment->path = $filepath;
        $appointment->status = 'Success';
        $appointment->save();
        return back()
            ->with('success', 'You have successfully upload file.')
            ->with('file', $fileName);
    }
    function pdfview($id)
    {
        $data=Appointment::find($id);
        $path=$data->path;
        if($path!=null){
            return response()->file(public_path($path), ['content-type' => 'application/pdf']);
        }
        else{
            return redirect('/yorder');
        }
    }
}