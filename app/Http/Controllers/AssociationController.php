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
        return var_dump($stuffs);
        if(empty($stuffs)){return 'aucun materiel disponible';}else{return $stuffs;}
    }
}