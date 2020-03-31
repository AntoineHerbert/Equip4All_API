<?php

namespace App\Http\Controllers;

use App\Category;
use App\Material;
use App\Sub_category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public static function getAll(){
        return Category::all();
    }

    public static function getSubCategory($categoryID)
    {
        foreach (Sub_category::all()->where('category_id',$categoryID) as $sub_category)
        {
            $sub_categories[] = $sub_category;
        }
        return $sub_categories;
    }

    public static function findOneByID($id)
    {
        return Category::all()->find($id);
    }

    public static function getMaterials($categoryID){

        foreach (Sub_category::all()->where('category_id',$categoryID) as $sub_category){
            $materials []= Material::all()->where('sub_category_id',$sub_category->id);
        }
        return $materials;
    }
}
