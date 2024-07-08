<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\returnValue;

class AccountController extends Controller
{
    //this method will show register page
    public function register()
    {
        return view('account.register');
    }
    public function processRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5',
            //while using confirmed we have to use same name below as well
            'password_confirmation' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('account.register')->withInput()->withErrors($validator);
            //Note: old() method will not work if the withInput() is not used
        }
        // Now Register User
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('account.login')->with('run', 'You have registered successfully.');
    }

    public function login()
    {

        return view('account.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('acoount.login')->withInput()->withErrors($validator);
        }
        //when entries are valid:
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //
            return redirect()->route('account.profile');
        } else {
            // when entries are not valid:
            return redirect()->route('account.login')->with('error', 'Either email/passsword is incorrect.');
        }
    }
    //shows the user profile pages
    public function profile()
    {
        $user = User::find(Auth::user()->id);
        // dd($user); shows the details in cmd format

        return view('account.profile', [
            'user' => $user
        ]);
    }
    //upadates the user profiles
    public function updateProfile(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id . ',id',
        ];
        if (!empty($request->image)) {
            $rules['image'] = 'image';
        }
        // here is no difference just the $rules is variable of array type is assigned and passed below:
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('account.profile')->withInput()->withErrors($validator);
        }
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();


        //Here we will upload image
        if (!empty($request->image)) {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $image->move(public_path('uploads/profile'), $imageName);

            $user->image = $imageName;
            $user->save();
        }






        return redirect()->route('account.profile')->with('success', 'Profile Updated Successfully.');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('account.login');
    }
}
