<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DialogFlowUser extends Model
{
    //
    protected $fillable = [
        'address', 
        'propertyType', 
        'propertySituation', 
        'solarSituation'
    ];
}
