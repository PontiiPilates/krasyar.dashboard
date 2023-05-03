<?php

namespace App\Http\Controllers;

use App\Services\NetDisk;

/**
 * Набор методов, которые отдают данные
 * для соответствующих графиков.
 */
class GetDataApiController extends Controller
{
    public function pie()
    {
        $pie = new NetDisk();
        $pie = $pie->dataTransform('PieChartComplete.csv', false);
        return response()->json($pie);
    }

    public function stackedBar()
    {
        $stackedBar = new NetDisk();
        $stackedBar = $stackedBar->dataTransform('BarChartComplete.csv', false);
        return response()->json($stackedBar);
    }

    public function speed()
    {
        $speed = new NetDisk();
        $speed = $speed->dataTransform('BarChartSpeedComplete.csv', false);
        return response()->json($speed);
    }

    public function table()
    {
        $table = new NetDisk();
        $table = $table->dataTransform('TableDashboard.csv', true);
        return response()->json($table);
    }

    public function valuesSet()
    {
        $valuesSet = new NetDisk();
        $valuesSet = $valuesSet->dataTransform('NoEmployee.csv', false);
        return response()->json($valuesSet);
    }
}
