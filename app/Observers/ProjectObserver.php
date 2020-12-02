<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    /**
     * Handle the project "created" event.
     *
     * @param  App\Models\Project  $project
     * @return void
     */
    public function creating(Project $project)
    {
        $project->created_by_user_id = \Auth::user()->id;
    }


}
