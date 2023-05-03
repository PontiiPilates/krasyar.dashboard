<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $theme;
    public $table_odd;
    public $fullscreen_key;
    public $time_reload_page;

    public function __construct()
    {
        $this->theme = config('dashboard.theme');
        $this->table_odd = config('dashboard.table_odd');
        $this->fullscreen_key = config('dashboard.fullscreen_key');
        $this->time_reload_page = config('dashboard.time_reload_page');
    }

    public function index()
    {
        return view('pages.dashboard', [
            'theme' => $this->theme,
            'table_odd' => $this->table_odd,
            'fullscreen_key' => $this->fullscreen_key,
            'time_reload_page' => $this->time_reload_page,
        ]);
    }
}
