<?php

namespace App\Http\Controllers;

use App\Loaning;
use App\Material;
use App\User;
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

    public static function createOne($request)
    {
        $loaning = new Loaning();
        $loaning->setAttribute('loaningStart',$request['loaningStart']);
        $loaning->setAttribute('loaningPlannedEnd',$request['loaningPlannedEnd']);
        $loaning->setAttribute('loaningEnd',$request['loaningEnd']);
        $loaning->setAttribute('user_id',$request['user_id']);
        $loaning->setAttribute('material_id',$request['material_id']);
        $loaning->save();
    }

    public static function deleteOne($id)
    {
        Loaning::all()->find($id)->delete();
    }

    public static function updateOne($request)
    {
        $loaning = Loaning::all()->find($request['id']);
        $loaning->setAttribute('designation',$request['designation']);
        $loaning->setAttribute('referent_name',$request['referent_name']);
        $loaning->setAttribute('referent_forename',$request['referent_forename']);
        $loaning->setAttribute('description',$request['description']);
        $loaning->save();
    }

    public static function getUser($id){
        return User::all()->find(Loaning::all()->find($id)->get('user_id'));
    }

    public static function getMaterial($id)
    {
        return Material::all()->find(Loaning::all()->find($id)->get('material_id'));
    }
}
