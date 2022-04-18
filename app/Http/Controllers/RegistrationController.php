<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;

class RegistrationController extends Controller
{
    public function registerUser(Request $req) {

        $userRole = UserRole::where('level', 0)->pluck('name')->all()[0];
        \Log::debug("User Role: ".$userRole);

        $newUser = new User();
        $newUser->name = $req->name;
        $newUser->email = $req->email;
        $newUser->password = $req->password;
        $newUser->role = $userRole;
        \Log::debug($newUser);
        $newUser->save();
        return redirect('/');
    }
}
