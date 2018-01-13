<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserInfoController extends Controller
{
    public function show($email)
    {
        $data = User::where('email',$email)->select(
            'id',
            'name',
            'email'
        )->get();

        return $data;
    }

}
