<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DraggableController extends Controller
{
    public function index()
    {
        return view('pages.draggable.index');
    }
}