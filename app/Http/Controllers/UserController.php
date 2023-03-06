<?php

namespace App\Http\Controllers;

use App\Exceptions\UserNotFoundException;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(Request $request, $id){
        try {

            $user = User::where(['id'=> $id])->firstOrFail();

        } catch(\Exception $exception){

            throw new UserNotFoundException();
        }


       return view('users.show', (compact('user')));


}


}
