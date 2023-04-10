<?php

namespace App\Http\Controllers;

use App\Models\Auth\Admin;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\AdminRegisterFormRequest;



class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [];
        $data['title'] ='MK|Dashboard';

        return view('admin.dashboard')->with($data);
    }

    public function processLogin(LoginFormRequest $request){
        $request->authenticate();
        // $user_type = $this->user_type;
        // $login_type = filter_var($this->input('login'), FILTER_VALIDATE_EMAIL)?'email':'username';
        // $credentials = $this->only($login_type, 'password');

        // if($user_type == 'admin')
        // {
        //     $admin = Admin::where($login_type, $this->login)->first();
        // }

        // if(is_null($admin))
        // {
        //     return redirect()->back()->with('error', 'opps! incorrect credentials')->withInput();
        // }

        // if($admin->active == '1')
        // {
        //     if(Auth::guard('admin')->attempt($credentials, $this->boolean('remember')))
        //     {
        //         $request->session()->regenerate();
        //         return redirect()->intended(route('admin.dashboard'));
        //     }
        // }else{
        //     return redirect()->back()->with('error', 'Account not verified yet')->withInput();
        // }
    }


    public function processRegister(AdminRegisterFormRequest $request): JsonResponse
    {
        
        $validated = $request->validated();

        $admin = new Admin();
        $admin->username = $validated['username'];
        $admin->email = $validated['email'];
        $admin->password = Hash::make($validated['password']);
        $admin->save();

        if(Auth::guard('admins')->attempt($request->only('email', 'password', $request->boolean('remember'))))
        {
            $message = "registration successful";
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'))->successResponse($message, $admin);
        }else{
            $message = 'Account created succssfully,but an error occured while trying to log you in to account, please login to your account again.';
            return redirect()->route('login')->errorResponse($message);
        }
    }
}



