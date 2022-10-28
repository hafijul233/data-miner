<?php

namespace App\Nova\Metrics\Patient;

use App\Models\Patient;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class GenderMetric extends Partition
{
    public $name = 'Affected Gender';

    /**
     * Calculate the value of the metric.
     *
     * @param NovaRequest $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return $this->count($request, Patient::class, 'sex')
            ->label(function ($value) {
                return match ($value) {
                    'F' => 'Female',
                    'M' => 'Male',
                    'U' => 'Unknown',
                    default => 'None',
                };
            });
    }

    /**
     * Determine the amount of time the results of the metric should be cached.
     *
     * @return \DateTimeInterface|\DateInterval|float|int|null
     */
    public function cacheFor()
    {
        // return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'affected-gender-wise-metric';
    }
}
