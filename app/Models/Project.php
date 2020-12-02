<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $with=['user'];
    protected $casts=[
//        'startDate_project'=>'date',
//         'endDate_project'=>'date',
//        'hobbies' => 'array'
    'project_type',
    'github_link'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'created_by_user_id');
    }


}
