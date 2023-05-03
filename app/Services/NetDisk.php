<?php

namespace App\Services;

use App\Interfaces\DataProvider;

/**
 * Преобразует данные из источника к требуемой структуре.
 */
class NetDisk implements DataProvider
{
    // источник данных
    public $source;

    public function __construct()
    {
        // определение источника данных
        $this->source = config('dashboard.source');
    }

    public function dataTransform($file_name, $with_header = true)
    {
        // открытие файла
        $open = fopen($this->source . $file_name, "r");

        // сборка требуемой структуры данных
        while ($string = fgetcsv($open, ',')) {
            $data[] = explode(';', $string[0]);
        }

        // закрытие файла
        fclose($open);

        // удаление "шапки" из данных
        if ($with_header == false) {
            unset($data[0]);
            $data = array_values($data);
        }

        // возвращает данные
        return $data;
    }
}
