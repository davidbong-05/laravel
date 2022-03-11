<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DragulaController extends Controller
{
    public function index()
    {
        // get the default inner page
        return view('pages.dragula.index');
    }
}