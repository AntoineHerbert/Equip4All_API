<?php

namespace App\Http\Controllers;

use App\Loaning;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function getAll(){
        return User::all();
    }
    public static function findOneByID($id)
    {
        return User::all()->find($id);
    }

    public static function getLoaning($userID){
        return Loaning::all()->where('user_id',$userID);
    }

    public static function createOne($request)
    {
        $user = new User();
        $user->setAttribute('name',$request['name']);
        $user->setAttribute('firstName',$request['firstName']);
        $user->setAttribute('email',$request['email']);
        $user->setAttribute('password',$request['password']);
        $user->setAttribute('city',$request['city']);
        $user->setAttribute('postal_code',$request['postal_code']);
        $user->setAttribute('remember_token',$request['remember_token']);
        $user->save();
    }

    public static function deleteOne($id)
    {
        User::all()->find($id)->delete();
    }

}
