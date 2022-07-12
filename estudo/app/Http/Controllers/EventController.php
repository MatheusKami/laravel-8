<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        /*funcoes */
    }

    public function create(){
        return view('events.create');
    }
}
