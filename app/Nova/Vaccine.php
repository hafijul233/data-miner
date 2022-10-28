<?php

namespace App\Nova;

use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Vaccine extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Vaccine::class;

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
     * @param NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->asBigInt()->sortable(),

            Text::make('Vaers ID', 'vaers_id')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('Type', 'vax_type')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('Brand Name', 'vax_name')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('Manufacturer', 'vax_manu')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('Vaccine LOT', 'vax_lot')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('Dose Series', 'vax_dose_series')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('Route', 'vax_route')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('Website', 'vax_site')
                ->sortable()
                ->nullable()
                ->default(null),

            Datetime::make('Imported At', 'created_at')->exceptOnForms(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
