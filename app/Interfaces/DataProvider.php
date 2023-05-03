<?php

namespace App\Interfaces;

/**
 * Требует реализации метода, преобразующего данные из источника к требуемой структуре.
 * На его основе можно реализовать провайдер для другого источника данных.
 * И при этом ничего не поломается.
 */
interface DataProvider
{
    public function dataTransform($file_name, $with_header);
}