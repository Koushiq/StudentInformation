<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
class LoginController extends Controller
{
    //
    public function verifyLogin(Request $request)
    {
        $user = new User();
        $data = $user->validateLogin($request);
        $request->session()->put('username', $request->username);

        $validate  = Validator::make($request->all(), [
            'username'  => 'required',
            'password'  => 'required',
        ]);
        if($validate->fails())
        {
            return back()
                    ->with('errors', $validate->errors())
                    ->withInput();
        }


        if(count($data)==1)
        {
            if($data[0]->role == "admin"){
                $request->session()->put('role', "admin");
                return redirect('/admin/home');
            }
            else
            {
                $request->session()->put('role', "student");
                return redirect('/student/home');
            }
           
        }
        else
        {
            $request->session()->flash('error', 'invalid username/password');
            return redirect('/');
        }
    }
}
