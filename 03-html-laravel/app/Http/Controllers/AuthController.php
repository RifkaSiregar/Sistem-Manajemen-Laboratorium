<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use Hash;
use Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Aktivitas;

class AuthController extends Controller
{
    public function login()
    {
        
        return view('auths.login');
    }
    public function postlogin(Request $request)
    { 
        if(Auth::attempt($request->only('email', 'password'))){
            Aktivitas::create([
                'user_id'=> auth()->user()->id,
                'aktivitas' => 'Login SIMALAB',
            ]);   
            return redirect('/dashboard');
        }
        return redirect('/login');
        
    }
    public function logout()
    {
     
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Logout SIMALAB',
        ]);   
        Auth::logout();
        return redirect('/login');
    }
    public function showFormRegister()
    {
        return view('auths.register');
    }
 
    public function register(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];
 
        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
           }  
               
        //Insert ke table users
        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->role = $request->role;
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();

        return redirect('/login');
    }

}