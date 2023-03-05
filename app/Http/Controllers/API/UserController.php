<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
