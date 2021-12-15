<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PagecounterController extends Controller
{
    public function index()
    {

        $pagecounter = \DB::table('pagecounter')->get();
        return view('pagecounter.index',['pagecounter' => $pagecounter]);

    }

    public function update()
    {
        $pagecounter = \DB::table('pagecounter')
        ->where('id', $pagecounter->id)
        ->increment('jumlah', 1);

        return view('pagecounter.index',['pagecounter' => $pagecounter]);
    }
}
