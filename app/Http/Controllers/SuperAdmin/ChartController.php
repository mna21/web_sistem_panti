<?php
namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function chartjs()
    {
        return view('superadmin.chartjs.index');
    }

    public function flot()
    {
        return view('superadmin.charts.flot');
    }

    public function inline()
    {
        return view('superadmin.charts.inline');
    }

    public function uplot()
    {
        return view('superadmin.charts.uplot');
    }
}
