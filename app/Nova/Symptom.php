<?php

namespace App\Nova;

use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Symptom extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Symptom::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'vaers_id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'vaers_id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->asBigInt()->sortable(),

            Number::make('Vaers ID', 'vaers_id')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptom1', 'symptom1')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptomversion1', 'symptomversion1')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptom2', 'symptom2')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptomversion2', 'symptomversion2')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptom3', 'symptom3')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptomversion3', 'symptomversion3')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptom4', 'symptom4')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptomversion4', 'symptomversion4')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptom5', 'symptom5')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptomversion5', 'symptomversion5')
                ->sortable()
                ->nullable()
                ->default(null),

            Datetime::make('Imported At', 'created_at')->exceptOnForms(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
