<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class BoardController extends Controller
{
    //
    public function getIndex(){
        return view('board');
    }
}
