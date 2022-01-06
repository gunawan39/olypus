<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;


use Illuminate\Foundation\Auth\User as Authenticatable;

class UserController extends Controller
{
    //

    public function index( $id)
    {
        $user = Users::where('id',$id)->get();
        return view('users/index',['user' => $user]);
    
    }
}
