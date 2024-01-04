<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Contactus;

class contactusController extends Controller
{
    public function index()
    {
        return view('contactus');
    }
    public function store(request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'number' => 'required|numeric',
            'message' => 'required|string',
        ]);
        // Log::debug($validatedData);
        Contactus::create($validatedData);

        return redirect()->back()->with('success', 'We will Message Soon!');
    }
}
