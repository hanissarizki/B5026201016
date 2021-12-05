<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showPraktikum2()
    {
        return view('prak2web');
    }

    function showEts()
    {
        return view('ets');
    }

    function showIsian()
    {
        return view('formpangkat');
    }

    function prosespangkatfunc(Request $request)
    {
        return view('prosespangkat');
    }
}
