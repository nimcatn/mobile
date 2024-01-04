<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function showLoginForm()
    {
        try {
            if (Auth::User()->role == 'admin') {
                return redirect(route('admin.home'));
            } elseif (Auth::User()->role == 'user') {
                return redirect(route('home'));
            }
        } catch (\Throwable $th) {}
        return view('admin.login');
    }

    public function login(Request $request)
    {
            $user = User::where(['username' => $request->username, 'status' => 1])->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                $msg = "نام کاربری یا رمز عبور اشتباه است";
                return redirect(route('login'))->with('error', $msg);
            } else {
                Auth::login($user);
                $msg = "با موفقیت وارد شدید";
                return redirect()->back()->with('success', $msg);
            }
    }

    public function logout()
    {
        Auth::logout();
        $msg = "با موفقیت از سیستم خارج شدید";
        return redirect(route('home'))->with('success', $msg);
    }



}
