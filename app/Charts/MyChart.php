<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class MyChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function my_chart(){
        $chart = new Chart;
        $chart->labels([0, 1, 2, 3, 4]);
        $chart->dataset('My dataset 1', 'line', [0, 1, 2, 3, 4]);

        return $chart;
    }
}
