<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'id','label','reference','tech_sheet','sub_category_id','association_id'
    ];
}
