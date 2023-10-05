<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
use \Carbon\Carbon;


class UpcomingTournamentController extends Controller
{
    public function index()
    {
        $result = Tournament::whereDate('date', '>', Carbon::now())->orderBy('date', 'asc')->first();
       return view('upcoming/upcoming')->with('result', $result);

    }
}
