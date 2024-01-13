<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class authController extends Controller
{
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

        $user = Auth::user();
        // dd($user && $user->roleid == 2);
        // log::debug($user);
        if ($user && $user->roleid == 1) {
            return redirect('/admin');
        } elseif ($user && $user->roleid == 2) {
            return redirect('/');
        }
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route(name: 'home'));
        } else {
            return redirect(route(name: 'login'))->with("error", "Login Details are not valid!");
        }
    }
    function signuppost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['roleid'] = "user";

        $user = User::create($data);
        if (!$user) {
            return redirect(route(name: 'signup'))->with("error", "Registration faild please try again!");
        } else {
            return redirect(route(name: 'home'));
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
        log::debug($user);

        $user->name = $request->input('edit_name');
        $user->email = $request->input('edit_email');

        if ($user->save()) {
            return redirect()->back()->with('success', 'User updated successfully');
        }

        return redirect()->back()->with('error', 'Failed to update user');
    }
}
