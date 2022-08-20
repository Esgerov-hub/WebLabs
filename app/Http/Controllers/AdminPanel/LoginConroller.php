<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginConroller extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where(['email' => $request->email])->first();
//        dd($user);
        if ($user != null) {
            $credentials = $request->only('email', 'password');
        }else{
            return redirect(route('login'));
        }

//        dd(auth()->attempt($credentials));
        if (auth()->attempt($credentials)) {

            return redirect()->route('admin.index');

        }else{

            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }
}
