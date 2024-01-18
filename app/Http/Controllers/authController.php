<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class authController extends Controller
{
    function dashboard()
    {
        return view('admin/dashboard');
    }
    function contact()
    {
        $contacts = Contactus::all();
        return view('admin/contact', ['contacts' => $contacts]);
    }
    function login()
    {
        return view('login');
    }
    function signup()
    {
        return view('signup');
    }
    function loginpost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // $user = Auth::user();
        // dd($user && $user->roleid == 1);
        // log::debug($user);

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->roleid == 1) {
                return redirect('/admin');
            } elseif ($user->roleid == 2) {
                return redirect('/');
            }
        } else {
            return redirect(route(name: 'login'))->with("error", "Login Details are not valid!");
        }
    }
    function signuppost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['roleid'] = "user";

        $user = User::create($data);
        if (!$user) {
            return redirect(route(name: 'signup'))->with("error", "Registration faild please try again!");
        } else {
            return redirect(route(name: 'home'))->with("success", "successfully Registration!");
        }
    }

    function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect(route(name: 'login'));
    }

    function getusers()
    {
        $userdata = User::all();
        return view('admin/user', ['userdata' => $userdata]);
    }

    function deleteuser(Request $request)
    {
        $userid = $request->input('id');
        $user = User::find($userid);
        // log::debug($appointment);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User Delete successfully');
        }
        return redirect()->back()->with('error', 'Appointment not found');
    }

    function edituser(Request $request, $id)
    {
        $user = User::find($id);
        // log::debug($id);
        // log::debug($user);

        $user->name = $request->input('edit_name');
        $user->email = $request->input('edit_email');
        $user->roleid = $request->input('edit_role');

        if ($user->save()) {
            return redirect()->back()->with('success', 'User updated successfully');
        }

        return redirect()->back()->with('error', 'Failed to update user');
    }
}
