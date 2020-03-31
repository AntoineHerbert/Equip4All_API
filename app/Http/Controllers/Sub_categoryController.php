<?php

namespace App\Http\Controllers;

use App\Sub_category;
use Illuminate\Http\Request;

class Sub_categoryController extends Controller
{
    public static function getAll(){
        return Sub_category::all();
    }
    public static function findOneByID($id)
    {
        return Sub_category::all()->find($id);
    }
}
