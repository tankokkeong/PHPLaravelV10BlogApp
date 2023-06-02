<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function SignUp(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' =>  ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6'],
            'confirm_password' => ['required', 'same:password'],
        ]);

        $incomingFields['password'] = Hash::make($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/Welcome');
    }

    public function Login(Request $request){

        $rules = ([
            'email' =>  ['required'],
            'password' => ['required'],
        ]);

        $validator = Validator::make($request->input(), $rules);

        if(auth()->attempt(['email' => $request->input('email'),  'password' => $request->input('password') ])){
            $request->session()->regenerate();
            return redirect('/Welcome');
        }
        else{
            $validator->errors()->add('customError', 'Incorrect email or password!');
            return redirect()->route('Login')->withErrors($validator)->withInput();
        }

    }

    public function Logout(){
        auth()->logout();
        return redirect('/');
    }
}
