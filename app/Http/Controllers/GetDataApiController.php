<?php

namespace App\Http\Controllers;

use App\Services\NetDisk;

/**
 * Набор методов, которые отдают данные
 * для соответствующих графиков.
 */
class GetDataApiController extends Controller
{
    private $it;
    private $tpod;

    public function __construct()
    {
        $this->it = config('dashboard.source_it');
        $this->tpod = config('dashboard.source_tpod');
    }

    /**
     * Группа методов для ИТ отдела.
     */
    public function pie()
    {
        $pie = new NetDisk();
        $pie = $pie->dataTransform($this->it, 'PieChartComplete.csv', false);
        return response()->json($pie);
    }

    public function stackedBar()
    {
        $stackedBar = new NetDisk();
        $stackedBar = $stackedBar->dataTransform($this->it, 'BarChartComplete.csv', false);
        return response()->json($stackedBar);
    }

    public function speed()
    {
        $speed = new NetDisk();
        $speed = $speed->dataTransform($this->it, 'BarChartSpeedComplete.csv', false);
        return response()->json($speed);
    }

    public function table()
    {
        $table = new NetDisk();
        $table = $table->dataTransform($this->it, 'TableDashboard.csv', true);
        return response()->json($table);
    }

    public function valuesSet()
    {
        $valuesSet = new NetDisk();
        $valuesSet = $valuesSet->dataTransform($this->it, 'NoEmployee.csv', false);
        return response()->json($valuesSet);
    }

    /**
     * Группа методов для техподдержки.
     */
    public function pieTPod()
    {
        $pie = new NetDisk();
        $pie = $pie->dataTransform($this->tpod, 'PieChartComplete.csv', false);
        return response()->json($pie);
    }

    public function stackedBarTPod()
    {
        $stackedBar = new NetDisk();
        $stackedBar = $stackedBar->dataTransform($this->tpod, 'BarChartComplete.csv', false);
        return response()->json($stackedBar);
    }

    public function speedTPod()
    {
        $speed = new NetDisk();
        $speed = $speed->dataTransform($this->tpod, 'BarChartSpeedComplete.csv', false);
        return response()->json($speed);
    }

    public function tableTPod()
    {
        $table = new NetDisk();
        $table = $table->dataTransform($this->tpod, 'TableDashboard.csv', true);
        return response()->json($table);
    }

    public function valuesSetTPod()
    {
        $valuesSet = new NetDisk();
        $valuesSet = $valuesSet->dataTransform($this->tpod, 'NoEmployee.csv', false);
        return response()->json($valuesSet);
    }
}
