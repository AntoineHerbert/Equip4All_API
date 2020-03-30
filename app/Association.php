<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable = [
        'id', 'designation', 'referent_name', 'referent_forename', 'description'
    ];
}
