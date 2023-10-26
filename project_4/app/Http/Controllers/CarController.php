<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function ShowCarTable(){
        $data = DB::table('cars')->get();

        return view('cars', ['cars' => $data]);
    }
}
