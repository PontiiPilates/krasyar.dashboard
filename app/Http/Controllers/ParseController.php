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

    public function convert()
    {
        $table = self::getDataFromCsv('Dashboard.csv');
        $leftAndRightHistogram = self::getDataFromCsv('BarChartComplete.csv', false);
        $circle = self::getDataFromCsv('PieChartComplete.csv', false);
        $simpleHistogram = self::getDataFromCsv('BarChartSpeedComplete.csv', false);

        // dump($table);
        // dump($leftAndRightHistogram);
        // dump($circle);
        // dump($simpleHistogram);

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
            'table' => $table,
            'leftAndRightHistogram' => $leftAndRightHistogram,
            'circle' => $circle,
            'simpleHistogram' => $simpleHistogram,
            'theme' => $theme,
            'table_odd' => $table_odd,
        ]);
    }
}
