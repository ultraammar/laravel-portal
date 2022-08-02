<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Str;
use Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
    	return view('admin.login');
    }
    public function login(Request $request)
    {
      $check = $request->all();
      if( Auth::guard('admin')
        ->attempt([
          'email' => $check['email'], 
          'password' => $check['password']  
        ])
      )
      {
        return redirect()
          ->route('admin.user.users')
          ->with('error','Admin Login Successfully');
      }
      else
      {
        return back()->with('error','Invaild Email Or Password');
      }

    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
