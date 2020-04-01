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
}
