<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfTask extends Model
{
    //
    public function task(){
        return $this->hasMany(Task::class,'task_id');
    }
}
