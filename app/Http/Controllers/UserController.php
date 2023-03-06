<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id){
        $user = User::find($id);
        if(!$user){
            abort(code:404, message:'User not found');
        }

        return $user;
    }

}
