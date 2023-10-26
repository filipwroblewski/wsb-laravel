<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function ShowCarTable(){
        $data = DB::table('cars')->paginate(2);

        return view('cars', ['cars' => $data]);
    }

    public function AddCar(Request $req){
        $brand = $req->input('brand');
        $model = $req->input('model');
        $capacity = $req->input('capacity');

        $result = DB::insert('insert into cars (brand, model, capacity) values (?, ?, ?)', [$brand, $model, $capacity]);

        if($result > 0){
            $result = "Rekord został prawidłowo dodany do tabeli cars.";
            return view('result', ['result' => $result]);
        }else{
            $result = "Nie udało się dodać rekordu do tabeli cars.";
            return view('forms.addcarform', ['result' => $result]);
        }
    }
}
