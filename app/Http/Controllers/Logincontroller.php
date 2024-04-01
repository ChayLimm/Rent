<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function verify(){
        $email = request("email");
        $password = request("password");
        
    }
}
