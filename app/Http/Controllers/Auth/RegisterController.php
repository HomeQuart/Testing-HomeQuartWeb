<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function adminregister()
    {
        return view('auth.adminregister');
    }
    public function storeUser(Request $request)
    {
        // $request->validate([
        //     'name'      => 'required|string|max:255',
        //     'email'     => 'required|string|email|max:255|unique:users',
        //     'role_name' => 'required|string|max:255',
        //     'password'  => 'required|string|min:8|confirmed',
        //     'password_confirmation' => 'required',
        // ]);

        // // $request->validate([
        // //     'name' => 'required|string|max:255',
        // //     'role_name' => 'required|string|max:255',
        // //     'email' => 'required|string|email|max:255|unique:users',
        // //     'password' => ['required', 'confirmed', Password::min(8)
        // //             ->mixedCase()
        // //             ->letters()
        // //             ->numbers()
        // //             ->symbols()
        // //             ->uncompromised(),
        // //     'password_confirmation' => 'required',
        // //     ],
        // // ]);
        
        // User::create([
        //     'name'      => $request->name,
        //     'avatar'    => $request->image,
        //     'email'     => $request->email,
        //     'role_name' => $request->role_name,
        //     'password'  => Hash::make($request->password),
        // ]);
        $request->validate([
            'role_name' => 'required|string|max:255',
            'full_name'      => 'required|string|max:255',
            'age'     => 'required|min:2|numeric',
            'gender'      => 'required|string|max:255',
            'contactno'     => 'required|min:11|numeric',
            'p_picture'     => 'required|image',
            'address'      => 'required|string|max:255',
            'contact_per'     => 'min:2|numeric',
            'place_isolation' => 'string|max:255',
            'status'    => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $p_picture = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $p_picture);

        $user = new User;
        $user->role_name    = $request->role_name;
        $user->full_name    = $request->full_name;
        $user->age          = $request->age;
        $user->gender       = $request->gender;
        $user->contactno    = $request->contactno;
        $user->p_picture    = $p_picture;
        $user->address      = $request->address;
        $user->contact_per  = $request->contact_per;
        $user->place_isolation  = $request->place_isolation;
        $user->status       = $request->status;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
 
        $user->save();

        Toastr::success('Create new account successfully :)','Success');
        return redirect('login');
    }
}
