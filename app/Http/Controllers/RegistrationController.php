<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    //
    public function create(){
        return view('auth.register');
    }

    public function store(RegistrationRequest $request){
        
      // $attributes = $request->all()  ;

        // User::create([
        //     'username' => $request->username,
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)

        // ]);
        
        // $attributes['password'] = Hash::make($request->password);

        User::create($request->all());

       // session()->flash('success', 'Thank you, you are already registered.');

        return redirect('/')->with('success', 'Thank you, you are already registered');
    }
}
