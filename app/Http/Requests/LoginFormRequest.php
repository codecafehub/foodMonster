<?php

namespace App\Http\Requests;

use App\Models\Auth\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required',
            'password' => 'required',
            'user_type' => 'required',
        ];
    }

    public function message(){
        return
        [
            'user_type.required' => 'please selcct a user type below'
        ];
    }

    public function authenticate($request)
    {
        $user_type = $this->user_type;
        $login_type = filter_var($this->input('login'), FILTER_VALIDATE_EMAIL)?'email':'username';
        $credentials = $this->only($login_type, 'password');

        if($user_type == 'admin')
        {
            $admin = Admin::where($login_type, $this->login)->first();
        }

        if(is_null($admin))
        {
            return redirect()->back()->with('error', 'opps! incorrect credentials')->withInput();
        }

        if($admin->active == '1')
        {
            if(Auth::guard('admin')->attempt($credentials, $this->boolean('remember')))
            {
                $request->session()->regenerate();
                return redirect()->intended(route('admin.dashboard'));
            }
        }else{
            return redirect()->back()->with('error', 'Account not verified yet')->withInput();
        }
    } 
}       