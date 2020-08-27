<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $casts=[
        'startDate_project'=>'date',
         'endDate_project'=>'date'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'created_by_user_id');
    }
//return $this->belongsToMany('App\Role')->withPivot('column1', 'column2');
    public function task(){
        return $this->hasMany(Task::class,'task_id');
    }
}
