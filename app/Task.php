<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function type_task(){
        return $this->belongsTo(TypeOfTask::class, 'typeTask_id');
    }


}
