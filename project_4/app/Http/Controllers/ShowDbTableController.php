<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShowDbTableController extends Controller
{
    public function ShowUsers(){
        $users = DB::table('users')->select('name', 'email', 'created_at')->get();
        // print_r($users);

        return view('userstable', ['users' => $users]);
    }

    public function AddUser(Request $req){
        $name = $req->input('name');
        $email = $req->input('email');
        $email_confirmation = $req->input('email_confirmation');
        $password = Hash::make($req->input('password'));
        $password_confirmation = $req->input('password_confirmation');

        $req ->validate([
            'name' => 'required|min:2',
            'email' => 'required|min:5|same:email_confirmation',
            'password' => 'required|min:5|same:password_confirmation|regex:/^.*(?=.{8,})/',
        ]);

        $result = DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$name, $email, $password]);

        if($result > 0){
            $result = "Rekord został prawidłowo dodany do tabeli users.";
            return view('result', ['result' => $result]);
        }else{
            $result = "Nie udało się dodać rekordu do tabeli users.";
            return view('forms.adduserform', ['result' => $result]);
        }
        
    }


}
