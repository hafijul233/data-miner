<?php

namespace App\Nova;

use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Patient extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Patient::class;

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
            ID::make()->asBigInt()
                ->sortable(),

            Number::make('Vaers ID', 'vaers_id')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('recive_date', 'recive_date')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('state', 'state')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('age_yrs', 'age_yrs')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('cage_yr', 'cage_yr')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('cage_mo', 'cage_mo')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('sex', 'sex')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('rpt_date', 'rpt_date')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('symptom_text', 'symptom_text')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('died', 'died')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('datedied', 'datedied')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('l_threat', 'l_threat')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('er_visit', 'er_visit')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('hospital', 'hospital')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('hospdays', 'hospdays')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('x_stay', 'x_stay')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('disable', 'disable')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('recovd', 'recovd')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('vax_date', 'vax_date')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('onset_date', 'onset_date')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('numdays', 'numdays')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('lab_data', 'lab_data')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('v_adminby', 'v_adminby')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('v_fundby', 'v_fundby')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('other_meds', 'other_meds')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('cur_ill', 'cur_ill')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('history', 'history')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('prior_vax', 'prior_vax')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('splttype', 'splttype')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('form_vers', 'form_vers')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('todays_date', 'todays_date')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('birth_defect', 'birth_defect')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('ofc_visit', 'ofc_visit')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('er_ed_visit', 'er_ed_visit')
                ->sortable()
                ->nullable()
                ->default(null),

            Text::make('allergies', 'allergies')
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
