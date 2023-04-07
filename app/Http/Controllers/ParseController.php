<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParseController extends Controller
{
    /**
     * Получение csv-файла и преобразование его в массив.
     */
    public function convert()
    {
        $data = [];

        $unc_path = '//k5/Public/1/';
        $file_name = 'realtest.csv';

        // Чтение файла
        $open = fopen($unc_path . $file_name, "r");

        // Сборка массива
        while ($string = fgetcsv($open, ',')) {
            $data[] = $string;
        }

        // Закрытие файла
        fclose($open);

        // echo "<pre>";
        // print_r($data);

        return view('pages.dashboard');
    }
}