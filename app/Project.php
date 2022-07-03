<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';

    protected $fillable = [
        'id','team','presale','enduser','partner','product','workingstatus','status','postatus','startdate','enddate','mdays','pocupdate','remark'
    ];

    public function staff()
    {
        return $this->belongsTo('App\Staff');
    }

}

