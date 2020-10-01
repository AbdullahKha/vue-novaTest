<?php

namespace App\Nova;


use Fourstacks\NovaCheckboxes\Checkboxes;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Khalin\Nova\Field\Link;
use Laravel\Nova\Http\Requests\NovaRequest;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Project::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static function label()
    {
        return __('Projects');
    }
    public static function singularLabel()
    {
        return __('Project');
    }
    public static $title = 'project_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return array(
            ID::make(__('ID'),'id')->sortable(),
            Text::make(__('Projects Name'),'project_name') ->rules('required', 'max:255'),
            Link::make('url_project', 'url_project')->rules('required'),
            Text::make(__('username'),'username') ->rules('required', 'max:255'),
            Text::make(__('password_project'),'password_project') ->rules('required', 'max:255'),
            Link::make('github_link', 'github_link')->rules('required'),
            Textarea::make('information_project'),
//            Date::make(__('startDate_project'),'startDate_project')->showOnDetail()->rules('required'),
//            Date::make(__('endDate_project'),'endDate_project')->showOnDetail()->rules('required'),
            BelongsTo::make(__('AssignTo'),'user',User::class),
        Checkboxes::make('Hobbies')
                ->options([
                    'sailing' => 'Sailing',
                    'rock_climbing' => 'Rock Climbing',
                    'archery' => 'Archery'
                ])
        );
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
