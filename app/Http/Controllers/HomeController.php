<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mpociot\BotMan\BotMan;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function BotMan(){
        $botman = app('botman');

        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello yourself.');
        });

        // start listening
        $botman->listen();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }



}
