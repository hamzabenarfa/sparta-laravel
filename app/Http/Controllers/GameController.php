<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = [
            ['title' => 'Big Bass Double Down Deluxe', 'image' => 'images/1.png', 'isNew' => true],
            ['title' => 'Wolf Gold Ultimate', 'image' => 'images/2.png', 'isNew' => true],
            ['title' => 'Dino', 'image' => 'images/3.png', 'isNew' => false],
            ['title' => 'Sugar Rush 1000', 'image' => 'images/4.png', 'isNew' => false],
            ['title' => 'The Dog House - Dog or Alive', 'image' => 'images/5.png', 'isNew' => false],
            // Add more games as needed
        ];

        return view('welcome', compact('games'));
    }
}
