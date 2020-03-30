<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_association extends Model
{
    protected $fillable = [
        'user_id','association_id'
    ];
}
