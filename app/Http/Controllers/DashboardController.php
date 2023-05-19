<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $theme_it;
    public $theme_tpod;
    public $table_odd_it;
    public $table_odd_tpod;
    public $fullscreen_key;
    public $time_reload_page;

    public function __construct()
    {
        $this->theme_it = config('dashboard.theme_it');
        $this->theme_tpod = config('dashboard.theme_tpod');
        $this->table_odd_it = config('dashboard.table_odd_it');
        $this->table_odd_tpod = config('dashboard.table_odd_tpod');
        $this->fullscreen_key = config('dashboard.fullscreen_key');
        $this->time_reload_page = config('dashboard.time_reload_page');
    }

    /**
     * Главная страница - ИТ отдел.
     */
    public function index()
    {
        return view('pages.dashboard', [
            'theme' => $this->theme_it,
            'table_odd' => $this->table_odd_it,
            'fullscreen_key' => $this->fullscreen_key,
            'time_reload_page' => $this->time_reload_page,
        ]);
    }

    /**
     * Второстепенная страница - Техподдержка.
     */
    public function tpod()
    {
        return view('pages.tpod', [
            'theme' => $this->theme_tpod,
            'table_odd' => $this->table_odd_tpod,
            'fullscreen_key' => $this->fullscreen_key,
            'time_reload_page' => $this->time_reload_page,
        ]);
    }
}
