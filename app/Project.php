<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $casts=[
        'startDate_project'=>'dateTime',
         'endDate_project'=>'dateTime'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'created_by_user_id');
    }
    public function task(){
        return $this->hasMany(Task::class,'task_id');
    }
}
