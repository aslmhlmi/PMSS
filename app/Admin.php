<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admins';

    protected $fillable = [
        'a.id','a.name','a.role','a.position','a.department'
    ];
}
