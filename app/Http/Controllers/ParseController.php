<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParseController extends Controller
{
    const UNC_PATH = '//k5/Public/1/dashboard/';


    protected function getDataFromCsv($file_name, $with_header = true)
    {

        $open = fopen(self::UNC_PATH . $file_name, "r");

        while ($string = fgetcsv($open, ',')) {
            $data[] = explode(';', $string[0]);
        }

        fclose($open);

        if ($with_header == false) {
            unset($data[0]);
            $data = array_values($data);
        }

        return $data;
    }

    public function index()
    {
        // $theme = 'earth';
        // $theme = 'monochrome';
        // $theme = 'provence';
        // $theme = 'morning';
        // $theme = 'coffee';
        // $theme = 'wines';
        // $theme = 'pastel';
        // $theme = 'blue';
        $theme = 'glamour';
        // $theme = 'sea';
        // $theme = 'defaultPalette';

        $table_odd = 'FFF0F5';

        return view('pages.dashboard', [
            'theme' => $theme,
            'table_odd' => $table_odd,
        ]);
    }

    public function pie()
    {
        $pie = self::getDataFromCsv('PieChartComplete.csv', false);
        return response()->json($pie);
    }

    public function stackedBar()
    {
        $stackedBar = self::getDataFromCsv('BarChartComplete.csv', false);
        return response()->json($stackedBar);
    }

    public function speed()
    {
        $speed = self::getDataFromCsv('BarChartSpeedComplete.csv', false);
        return response()->json($speed);
    }

    public function table()
    {
        $table = self::getDataFromCsv('TableDashboard.csv');
        return response()->json($table);
    }

    public function valuesSet()
    {
        $valuesSet = self::getDataFromCsv('NoEmployee.csv', false);
        return response()->json($valuesSet);
    }
}
