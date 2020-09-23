<?php

namespace App\Http\Controllers;

use App\Support\Teams;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        // dd(config('site.team'));
        return view('team', [
            "teams" => Teams::teams(),
            "index" => $index = (new Parsedown())->text($docs->getIndex())
        ]);
    }
}
