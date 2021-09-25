<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(){
        $chanelNames="Agoy Ahoy";
        $chanelDescriptions="Chanel Berbagi Ilmu";
        $articles=array(
            'Pengenalan Laravel',
            'Sinau Middleware',
            'Delok o tutorial tik bene dang iso',
        );
        return view('article', compact('chanelNames', 'chanelDescriptions', 'articles'));
    }
}