<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(Request $request, $id){


        $user = User::where(['id'=> $id])->first();


        return view('users.show', (compact('user')));
}


}
