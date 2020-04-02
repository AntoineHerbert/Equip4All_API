<?php

namespace App\Http\Controllers;

use App\Category;
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

    public static function updateOne($request)
    {
        $subCat = Sub_category::all()->find($request['id']);
        $subCat->setAttribute('designation',$request['designation']);
        $subCat->setAttribute('referent_name',$request['referent_name']);
        $subCat->setAttribute('referent_forename',$request['referent_forename']);
        $subCat->setAttribute('description',$request['description']);
        $subCat->save();
    }

    public static function getCategory($id)
    {
        return Category::all()->find(Sub_category::all()->find($id)->get('category_id'));
    }
}
