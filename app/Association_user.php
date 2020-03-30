<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association_user extends Model
{
    protected $fillable = [
        'user_id','association_id'
    ];
}
