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

    public static function createOne($request)
    {
        $mat = new Material();
        $mat->setAttribute('label',$request['label']);
        $mat->setAttribute('reference',$request['reference']);
        $mat->setAttribute('tech_sheet',$request['tech_sheet']);
        $mat->setAttribute('sub_category_id',$request['sub_category_id']);
        $mat->setAttribute('association_id',$request['association_id']);
        $mat->save();
    }

    public static function deleteOne($id)
    {
        Material::all()->find($id)->delete();
    }
}
