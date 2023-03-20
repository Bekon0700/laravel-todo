<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function userSignUp() {
        return view('signup');
    }

    public function userSignUpPost() {
        $name = request('userName');
        $phone = request('userPhone');
        $password = bcrypt(request('userPassword'));
        DB::insert('insert into users (name, phone, password) values (?, ?, ?)', [$name, $phone, $password]);
        return redirect('/login');
    }

    public function userSignIn() {
        return view('signin');
    }

    public function userSignInPost() {
        $phone = request('userPhone');
        $password = bcrypt(request('userPassword'));
        $user = DB::select('select * from users where phone= ? ', [$phone]);
        if(Hash::check($password, $user[0]->password)) {
            return redirect('/todos');
        }
        return view('signin');
    }
}
