<?php

namespace App\Http\Controllers;

use App\Loaning;
use Illuminate\Http\Request;

class LoaningController extends Controller
{
    public static function getAll(){
        return Loaning::all();
    }
    public static function findOneByID($id)
    {
        return Loaning::all()->find($id);
    }
}
