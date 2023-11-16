<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();

        return view('articles.index', ['articles'=>$articles]);

    }

    public function AddArticle(Request $req){
        $title = $req->input('title');
        $body = $req->input('body');

        $result = DB::insert('insert into articles (title, body) values (?, ?)', [$title, $body]);

        if($result > 0){
            $result = "Rekord został prawidłowo dodany do tabeli articles.";
            return view('result', ['result' => $result]);
        }else{
            $result = "Nie udało się dodać rekordu do tabeli articles.";
            return view('forms.addarticlesform', ['result' => $result]);
        }
    }
}
