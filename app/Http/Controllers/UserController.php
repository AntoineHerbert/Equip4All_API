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

}
