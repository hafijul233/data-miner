<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\Patient\GenderMetric;
use App\Nova\Metrics\Symptom\SymptomOneMetric;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{

    /**
     * Get the displayable name of the dashboard.
     *
     * @return string
     */
    public function name()
    {
        return 'Home';
    }

    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new GenderMetric,
            new SymptomOneMetric
        ];
    }
}
