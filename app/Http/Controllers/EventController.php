<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    function index(){

        return view('eventos');
    }

    function details(){

        return view('eventDetail');
    }
}
