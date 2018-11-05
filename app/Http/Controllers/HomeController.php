<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('home')->withArticles(\App\Article::all());
        // return view('home')->with('Articles', \App\article::all());
    }

    /**
     * @param string $ test data
     */
    public function helloween(string $datadd) {
        echo(helo);

    }

    public function hellotest(string $date)
    {

    }

}
