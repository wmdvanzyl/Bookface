<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;

class LoginController extends Controller
{
    public function loginUser(Request $req) {
        $userKnocking = array(
            'email' => $req->email,
            'password' => $req->password
        );

        $storedUser = new User();
        $storedUser->email = $req->email;
        $storedUser->password = $req->password;
        \Log::debug('Stored User: '.$storedUser);

        if ($userKnocking['email'] == $storedUser->email && $userKnocking['password'] == $userKnocking->password) {
            \Log::debug('Cookie: '.$cookie);
        }

        return redirect('/');
    }
}
