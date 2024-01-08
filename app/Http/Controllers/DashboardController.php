<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->isPlanter()){
            return $this->planter();
        }

        return $this->funder();
    }

    public function planter()
    {
        return view('planter.dashboard');
    }

    public function funder()
    {
        return view('funder.dashboard');
    }
}
