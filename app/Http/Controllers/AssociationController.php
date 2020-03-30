<?php

namespace App\Http\Controllers;

use App\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    public static function getAll(){
        return Association::all();
    }
    public static function getMembers(){
        return ;
    }
}
