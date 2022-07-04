<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';

    protected $fillable = [
        'id','team','presale','enduser','partner','product', 'staff_id' ,'workingstatus','status','postatus','startdate','enddate','mdays','pocupdate','remark'
    ];

    // public function staff()
    // {
    //     return $this->belongsTo('App\Staff');
    // }

}

