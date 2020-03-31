<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public static function getAll(){
        return Material::all();
    }
    public static function findOneByID($id)
    {
        return Material::all()->find($id);
    }
}
