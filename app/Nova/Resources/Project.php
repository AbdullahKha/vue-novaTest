<?php

namespace App\Nova\Resources;


use App\Nova\Filters\ProjectType;
use App\Nova\Metrics\ProjectCount;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
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
    public static $model = \App\Models\Project::class;

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
        'id','project_name'
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
            Link::make(__('Url Project'), 'url_project')->rules('required'),
            Text::make(__('Username'),'username') ->rules('required', 'max:255'),
            Text::make(__('Password'),'password_project') ->rules('required', 'max:255'),
            Link::make('github_link', 'github_link')->rules('required'),
            Select::make(__('Project type'),'project_type')->options([
                'Sys'=>__('Sys'),
                'Archi'=>__('Archi'),
                'Web'=>__('Web'),
            ]) ->rules('required')->showOnIndex(),
            Textarea::make('information_project'),
            BelongsTo::make(__('CreatedBy'),'user',User::class)->exceptOnForms(),
//        Checkboxes::make('Hobbies')
//                ->options([
//                   User::class
//                ])
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
        return [
            new ProjectCount()
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new ProjectType
        ];
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
        return [
//            new ExportReport
        ];
    }

}
