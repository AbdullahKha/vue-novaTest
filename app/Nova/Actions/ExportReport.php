<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Text;
use niklasravnsborg\LaravelPdf\Facades\Pdf;
class ExportReport extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        //

        $data = [

                'foo' => 'bar',

//            'Subject'=>$fields->Subject,
//            'SubSubject'=>$fields->SubSubject
        ];

        $data = [
            'foo' => 'bar'
        ];
//        $pdf = PDF::loadView('report', $data);
//        return $pdf->stream('report');
        $filename = 'تقرير-عن'.$fields->Subject.'.pdf';
        $path = storage_path('app/public/reports');

        $pdf = PDF::loadView('report', $data);
        $pdf->save($path.$filename);
        return Action::redirect($filename);

    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [
//            Text::make('عنوان التقرير','Subject') ->sortable()
//                ->rules('required','max:200'),
//            Text::make('العنوان الفرعي','SubSubject')->sortable() ->rules('required','max:200'),

        ];
    }
}
