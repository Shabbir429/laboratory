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
    function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);
        $contact=Contactus::create($validatedData);
        if($contact){
            return redirect()->back()->with('success', 'We will Message Soon!');
        }
        else{
            Log::debug("err");
            return redirect("/");
        }
    }
}
