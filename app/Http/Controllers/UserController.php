<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function perfil(){
        return view('update-profile-information-form');
    }
}
