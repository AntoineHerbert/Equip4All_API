<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaning extends Model
{
    protected $fillable = [
        'id','loaningStart','loaningPlannedEnd','loaningEnd','user_id','material_id'
    ];

}
