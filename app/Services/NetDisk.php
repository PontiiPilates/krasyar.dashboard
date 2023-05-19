<?php

namespace App\Services;

use App\Interfaces\DataProvider;

/**
 * Преобразует данные из источника к требуемой структуре.
 */
class NetDisk implements DataProvider
{
    public function dataTransform($source, $file_name, $with_header = true)
    {
        // открытие файла
        $open = fopen($source . $file_name, "r");

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
