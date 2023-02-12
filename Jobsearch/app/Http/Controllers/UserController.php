<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    //
    public function CreateForm(){
        return view('user.register');
    }

    public function StoreUser(Request $request){

        $newUser = new User();

        $newUser->email = $request->email;
        $newUser->name = $request->name;
        $newUser->password = bcrypt($request->password);

        // dd($newUser);
        $newUser->save();

        // flash('User Created Successfully!')->success;
        Alert::success('User Created Successfully!','Logged In');

        auth()->login($newUser);

        return redirect('/');
    }

    public function LogOut(){

        auth()->logout();

        Alert::success('User Logged Out!', 'Browsing as guest');

        return redirect('/');
    }

    public function loginform(){
        return view('user.login');
    }

    public function login(Request $request){
        $userLogin['email']= $request->email;
        $userLogin['password']= $request->password;

        if(auth()->attempt($userLogin)){
            $request->session()->regenerate();

            Alert::success('Logged In!','Happy Browsing');

            return redirect('/');
        }
        // Alert::error('Invalid Details');

        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }
}
