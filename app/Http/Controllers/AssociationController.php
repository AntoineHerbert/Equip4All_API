<?php

namespace App\Http\Controllers;

use App\Association;
use App\Association_user;
use App\Material;
use App\User;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    public static function getAll(){
        return Association::all();
    }
    public static function getMembers($associationID){
        $pivots = Association_user::all()->where('association_id',$associationID);
        foreach ($pivots as $pivot) {
            $users[] = User::all()->find($pivot->user_id);
        }
        return $users;
    }
    public static function getStuffs($associationID)
    {
        $stuffs = Material::all()->where('association_id',$associationID);
        if($stuffs->all()==[])
        {
            return null;
        }
        else
        {
            return ($stuffs);
        }
    }
    public static function findOneByID($id)
    {
        return Association::all()->find($id);
    }

    public static function getMaterials($associationID){
        return Material::all()->where('association_id',$associationID);
    }

    public static function createOne($request)
    {
        $assoc = new Association();
        $assoc->setAttribute('designation',$request['designation']);
        $assoc->setAttribute('referent_name',$request['referent_name']);
        $assoc->setAttribute('referent_forename',$request['referent_forename']);
        $assoc->setAttribute('description',$request['description']);
        $assoc->save();
    }

    public static function deleteOne($id)
    {
        Association::all()->find($id)->delete();
    }

    public static function updateOne($request)
    {
        $assoc = Association::all()->find($request['id']);
        $assoc->setAttribute('designation',$request['designation']);
        $assoc->setAttribute('referent_name',$request['referent_name']);
        $assoc->setAttribute('referent_forename',$request['referent_forename']);
        $assoc->setAttribute('description',$request['description']);
        $assoc->save();
    }


}
