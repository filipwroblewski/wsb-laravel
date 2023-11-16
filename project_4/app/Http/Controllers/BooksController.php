<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function ShowBooks(){
        $data = DB::table('books')->get();
        //print_r($data);
        return view('books', ['books' => $data]);
    }
}
