<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class BoardController extends Controller
{
    //
    public function getIndex(){
        $scores = Score::orderByTotal()
                ->orderBySubject()->get();
        $data = ['scores' => $scores];
        return view('board', $data);
    }
}
