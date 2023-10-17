<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
        return 'Kontroler ShowController';
    }

    public function showView(){
        $data = [
            'firstName' => 'Bob',
            'lastName' => 'Bobson',
            'city' => 'Poznań',
            'hobby' => [
                'Wioślarstwo',
                'Wędkarstwo',
                'Szachy',
                'Projekty w Laravel-u',
            ],
        ];
        
        return View('table', $data);
    }
}
