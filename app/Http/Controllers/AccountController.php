<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //
    public function index()
    {

    }

    public function login(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');
        $user       = User::where(['email' => $email])->first();
        if ($user) {
            Session::put('user', $user);
            if(Hash::check($password, $user->password)){
                return redirect('/dashboard');
                // return "Hai ".$user->email;

            }else{
                return "Maaf email atau password yang anda masukan tidak sesuai.";
            }
        }else{
            //return "Maaf email atau password yang anda masukan tidak sesuai.";
            $password = '123456';
            $hashedPassword = Hash::make($password);
            return $hashedPassword; 
        }
    }

    

}
