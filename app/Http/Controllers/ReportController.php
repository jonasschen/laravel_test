<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function matches()
    {
        $matches = [];

        // ????

        return view('reports.matches', compact('matches'));
    }

    public function lineups()
    {
        $players = [];

        // ????

        return view('reports.lineups', compact('players'));
    }
}