<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CreateFakeData extends Controller
{
    public function Show(){
        $faker = Faker::create('pl_PL');
        $users = [];
        for ($i = 0; $i < 5; $i++){
            $users[] = [
                'name' => $faker->firstName,
                'email' => $faker->email,
                'password' => bcrypt($faker->password),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        //DB::insert('insert into users (name, email, password, created_at, updated_at) values (?,?,?,?,?)', array_values($users[0]));
        $res = DB::table('users')->insert($users);

        print_r($res);
    }
}
