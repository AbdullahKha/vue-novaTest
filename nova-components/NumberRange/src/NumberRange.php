<?php

namespace Acme\NumberRange;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class NumberRange extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'NumberRange';

    /**
     * Apply the filter to the given query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        return $query;
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function options(Request $request)
    {
        return [];
    }

    public function minNumber(array $min)
    {
        return $this->withMeta(['min' => $min]);
    }
    public function maxNumber(array $max)
    {
        return $this->withMeta(['max' => $max]);
    }
}
