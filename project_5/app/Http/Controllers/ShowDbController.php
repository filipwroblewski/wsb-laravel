<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowDbController extends Controller
{
    public function showDbTable(){
        // return DB::select('select * from users_test');
        // return DB::table('users_test')->get();
        /*return DB::table('users_test')
        ->where('lastName', 'Nowak')
        ->get();*/

        /*$data = DB::table('users_test')->count();
        echo $data;*/

        /*$data = DB::table('users_test')->where('lastname', 'Nowak')->get();
        print_r($data);*/

        return DB::table('users_test')->where('lastName', 'Nowak')->delete();
    }
}
