<?php

namespace App\Controllers;

class Game extends BaseController
{
    public function index()
    {
        return view('game/start');
    }

    public function index1()
    {
        return view('game/main');
    }
    public function index2()
    {
        return view('game/gameOver');
    }
    
}
