<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContoller extends Controller
{
    public function index()
    {
        //
        //$dosen =DB::table('lecturers')->get();
        
        return view('dosen/index',['data_dosen'=>$dosen]);
    }
}
