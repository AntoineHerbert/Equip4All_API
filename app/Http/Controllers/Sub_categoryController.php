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

    public static function createOne($request)
    {
        $subCat = new Sub_category();
        $subCat->setAttribute('label',$request['label']);
        $subCat->setAttribute('category_id',$request['category_id']);
        $subCat->save();
    }

    public static function deleteOne($id)
    {
        Sub_category::all()->find($id)->delete();
    }
}
