<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staffs';

    protected $fillable = [
        'id','name','position','team','department','type'
    ];
}
