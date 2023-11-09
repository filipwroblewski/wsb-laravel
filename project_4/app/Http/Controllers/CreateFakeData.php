<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

class CreateFakeData extends Controller
{
    public function Show(){
        $faker = Faker::create('pl_PL');
        $users = [];
        for ($i = 0; $i < 5; $i++){
            $users = [
                'name' => $faker->name,
            ];
        }

        print_r($users);
    }
}
