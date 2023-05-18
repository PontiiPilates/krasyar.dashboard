<?php

namespace App\Http\Controllers;

use App\Services\NetDisk;

/**
 * Набор методов, которые отдают данные
 * для соответствующих графиков.
 */
class GetDataApiController extends Controller
{
    /**
     * Группа методов для ИТ отдела.
     */
    public function pie()
    {
        $pie = new NetDisk();
        $pie = $pie->dataTransform('it', 'PieChartComplete.csv', false);
        return response()->json($pie);
    }

    public function stackedBar()
    {
        $stackedBar = new NetDisk();
        $stackedBar = $stackedBar->dataTransform('it', 'BarChartComplete.csv', false);
        return response()->json($stackedBar);
    }

    public function speed()
    {
        $speed = new NetDisk();
        $speed = $speed->dataTransform('it', 'BarChartSpeedComplete.csv', false);
        return response()->json($speed);
    }

    public function table()
    {
        $table = new NetDisk();
        $table = $table->dataTransform('it', 'TableDashboard.csv', true);
        return response()->json($table);
    }

    public function valuesSet()
    {
        $valuesSet = new NetDisk();
        $valuesSet = $valuesSet->dataTransform('it', 'NoEmployee.csv', false);
        return response()->json($valuesSet);
    }

    /**
     * Группа методов для техподдержки.
     */
    public function pieTPod()
    {
        $pie = new NetDisk();
        $pie = $pie->dataTransform('tpod', 'PieChartComplete.csv', false);
        return response()->json($pie);
    }

    public function stackedBarTPod()
    {
        $stackedBar = new NetDisk();
        $stackedBar = $stackedBar->dataTransform('tpod', 'BarChartComplete.csv', false);
        return response()->json($stackedBar);
    }

    public function speedTPod()
    {
        $speed = new NetDisk();
        $speed = $speed->dataTransform('tpod', 'BarChartSpeedComplete.csv', false);
        return response()->json($speed);
    }

    public function tableTPod()
    {
        $table = new NetDisk();
        $table = $table->dataTransform('tpod', 'TableDashboard.csv', true);
        return response()->json($table);
    }

    public function valuesSetTPod()
    {
        $valuesSet = new NetDisk();
        $valuesSet = $valuesSet->dataTransform('tpod', 'NoEmployee.csv', false);
        return response()->json($valuesSet);
    }
}
